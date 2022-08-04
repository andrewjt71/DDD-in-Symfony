<?php

// Where should calls to db (via repos etc) live?

// You have 3 options here, but each of them only gives you 2 out of the 3 attributes:
//Push all external reads and writes to the edges of a business operation - Preserves domain model completeness and purity but concedes performance.
//Inject out-of-process dependencies into the domain model - Keeps performance and domain model completeness, but at the expense of domain model purity.
//Split the decision-making process between the domain layer and controllers - Helps with both performance and domain model purity but concedes completeness. With this approach, you need to introduce decision-making points (business logic) in the controller.

// Preference in most straightforward cases is to sacrifice domain purity, and make db calls from within domain services e.g. "does dr already have appointment"
