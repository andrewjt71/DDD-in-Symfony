<?php

//Imagine I have a command handler which processes a "create appointment" command... Pseudocode below:
//Validate doctor ID format by instantiating a value object from within the domain layer
//Use repository to verify doctor exists with passed ID (use value object above as an arg)
//Validate patient ID format by instantiating a value object from within the domain layer
//Use repository to verify patient exists with passed ID (use value object above as an arg)
//Use repository to verify that doctor does not have any existing appointments which conflict with the time we are attempting to create one for?
//Create an instance of Domain>Appointment, passing in Command ???? feels strange to typehint domain model constructor against a Command?
//Pass the instance of Domain>Appointment to the Repo for storage??? Why is the repo interface in the domain layer, if it's only referenced from within the application and interface layer?
//Questions:
//Is the above majorly flawed in any way
//Does 6. feel odd to anyone? Having a createByCommand static constructor on a domain model? Feels odd to me for the Domain to know what a command is, is this normal?
//Point 7 brings this question to mind - I see why we would define repo interface in the Domain layer - inversion of deps etc, but surely that only makes sense if we are relying on a repo from within the domain. In the above we are only ever calling the repo from the application and infrastructure layers, so why define it in the Domain? And if we were calling it from within the domain is this ok? Seems to me that this would mean we are crossing process boundaries from within the Domain layer, is this ok so long as we are using inversion of deps? (I understand Vlad's trilemma, just not sure whether the above is a separate point :thinking_face:
//At which point do we move those steps from the handler into an application service? I think I understand the difference between application services and domain services, but when it comes to the handler housing code vs an application service housing code, it gets a little fuzzy because to me, the command handler is itself an application service by definition? Perhaps an application service should be used if it contains code which could be used across multiple handlers?
