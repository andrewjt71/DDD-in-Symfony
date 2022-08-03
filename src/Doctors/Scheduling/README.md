# Bounded Context

A bounded context is a logical boundary around some behaviour within the business. Here the bounded context is "Scheduling".
A "patient" in the context of "Scheduling" can be completely different to a "Patient" in another context such as 
"Registration". In the context "Registration", we'd need to know all sorts of things about the "Patient". In the context
of "Scheduling" we may only need to know a users unique identifier and perhaps their name.
