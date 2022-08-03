# Aggregate

An aggregate is a collection of objects that represent one conception the domain. 

<a href="https://martinfowler.com/bliki/DDD_Aggregate.html">Martin Fowler defines an aggregate</a> as a pattern in
Domain-Driven Design. A DDD aggregate is a cluster of domain objects that can be treated as a single unit. An example
may be an order and its line-items, these will be separate objects, but it's useful to treat the order (together with
its line items) as a single aggregate.

Beware of the <a href="https://martinfowler.com/bliki/AnemicDomainModel.html">anemic domain model anti-pattern</a>

## Aggregate route
Aggregates have an aggregate root through which the aggregate should always be accessed. In this case the aggregate
root is `Appointment.php`.

## Named constructors

Common practice is to utilise <a href="https://verraes.net/2014/06/named-constructors-in-php/">Named constructors</a>
within aggregate entities.

## Value objects

A small simple object, like money or a date range, whose equality isn't based on identity <a href="https://martinfowler.com/eaaCatalog/valueObject.html"><i>source</i></a>

Two value objects are considered the same when they have the same values (unlike entities which have an identity regardless
of their values)
