# Infrastructure layer

The infrastructure layer is how the data that is initially held in domain entities (in memory) is persisted in
databases or another persistent store. An example is using Entity Framework Core code to implement the Repository
pattern classes that use a DBContext to persist data in a relational database.
In accordance with the previously mentioned Persistence Ignorance and Infrastructure Ignorance principles, the 
infrastructure layer must not "contaminate" the domain model layer. You must keep the domain model entity classes
agnostic from the infrastructure that you use to persist data (EF or any other framework) by not taking hard 
dependencies on frameworks. Your domain model layer class library should have only your domain code, just POCO 
entity classes implementing the heart of your software and completely decoupled from infrastructure technologies.
<a href="https://docs.microsoft.com/en-us/dotnet/architecture/microservices/microservice-ddd-cqrs-patterns/ddd-oriented-microservice#the-infrastructure-layer"><i>source</i></a>
