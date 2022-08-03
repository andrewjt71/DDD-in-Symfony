# Application Services

Its job is to handle requests from the outside world and to orchestrate an operation. What we mean is that the service
layer <i>drives</i> the application by following a bunch of simple steps:
- Get some data from the database
- Update the domain model
- Persist any changes

This is the kind of boring work that has to happen for every operation in your system, keeping it separate from business
logic helps keep things tidy.

<a href="https://www.cosmicpython.com/book/preface.html">source</a>
