# UI layer

This layer is the part where interaction with external systems happens. This layer is the gateway to the effects that
a human, an application or a message will have on the domain. Requests will be accepted from this layer and the 
response will be shaped in this layer and displayed to the user.

There seems to be a division in whether people acknowledge this as a separate layer. Many DDD implementations negate
this layer, placing Controllers and Cli Commands in the Infrastructure layer. 
