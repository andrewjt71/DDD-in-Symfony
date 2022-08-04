<?php

// Controller to handle web requests.
// Contains a createAppointment action. The E2E flow would be something like:
// Controller action creates a Command
// Controller actopm passes command to relevant command handler
// Command Handler calls method on Domain Service - something like AppointmentService::createAppointment(int $doctorId, int $patientId, DateTime $date)
// Domain service AppointmentService::createAppointment calls something like $appointment = Appointment::create(DoctorId $doctorId, PatientId $patientId, DateTime $date)
// Domain service AppointmentService::createAppointment performs checks it needs to carry out e.g. is doctor still free for this appointment, if doctor exists with id, if patient exists with id *see below*
// Domain service AppointmentService::createAppointment returns Appointment instance
// Command Handler calls Repo::save($appointment)
// Command Handler calls $dispatcher->dispatch(new AppointmentCreatedEvent($appointment)); ) or if using event sourcing calls $dispatcher->dispatch($appointment->releaseEvents()
// Command Handler returns native data types to the controller
// Controller sends response to client


// * The domain absolutely has to enforce invariants like "doctor mustn't have overlapping appointments". Definitely.
// What I'm not so sure is needed in the domain code is "does this patient exist"? What happens if patient is removed
// from the system via some administration task, after they have loaded up the make appointment screen? What happens if
// they do that after the appointment has been created? Same consequence, right? This isn't a relational DB, you can't
// have foreign keys protect you.
// A key part of DDD is that the aggregate is the transactional consistency boundary. i.e. any changes within a call to
// the aggregate pass or fail together, but calls to multiple aggregates will pass or fail independently. This buys you
// scalability and maybe other things. But it comes at a cost in some use cases. So if your system is backed by an RDB,
// sure, make use of the fact that it has cross-aggregate transactions. It's just another trade-off.
// Within an aggregate you get immediate consistency; between aggregates you normally only get eventual consistency. If changes to one aggregate mean another aggregate should be updated then you need other mechanisms (like a process manager)
// (or just use database transactions, and accept the compromise)
