<?php
// Domain model purity is defined by Vladimir Khorikov as "When the domain layer doesn’t have out-of-process dependencies."
// Persisting data from within the domain layer using a dependency which implements an interface which is defined within
// the domain does not violate this principle
