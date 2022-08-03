# Domain Services

This is the name for a piece of logic that belongs in the domain model but doesn't sit naturally inside a stateful 
entity or value object. For example, if you were building a shopping cart application, you might choose to build
taxation rules as a domain service. Calculating tax is a separate job from updating the cart, and it's an important
part of the model, but it doesn't seem right to have a persisted entity for the job. Instead a stateless TaxCalculator
class or a `calculate_tax` function can do the job.

<a href="https://www.cosmicpython.com/book/preface.html">source</a>
