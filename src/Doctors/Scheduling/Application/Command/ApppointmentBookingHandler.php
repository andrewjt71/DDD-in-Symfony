<?php

// Command handler which processes a "create appointment" command... Pseudocode below:
// Validate doctor ID format by instantiating a value object from within the domain layer
// Use repository to verify doctor exists with passed ID (use value object above as an arg)
// Validate patient ID format by instantiating a value object from within the domain layer
// Use repository to verify patient exists with passed ID (use value object above as an arg)
// Use repository to verify that doctor does not have any existing appointments which conflict with the time we are attempting to create one for
// Create an instance of Domain>Appointment, passing in values from command (and additional ones from handler if appropriate)
// Pass the instance of Domain>Appointment to the Repo for storage
// Is the above majorly flawed in any way
