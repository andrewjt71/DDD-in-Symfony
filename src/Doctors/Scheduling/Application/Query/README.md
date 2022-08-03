# Query

CQRS stands for Command and Query Responsibility Segregation, a pattern that separates read and update operations for
a data store. Implementing CQRS in your application can maximize its performance, scalability, and security.

<a href="https://docs.microsoft.com/en-us/azure/architecture/patterns/cqrs">source</a>

Queries should not use the domain if we can help it. They should be optimised for fast reads. There will be scenarios
where a compromise is appropriate and domain objects sneak into this area of the codebase. Although this is often a 
necessary trade of, know that it's no longer CQRS.
