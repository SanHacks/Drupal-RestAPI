# Drupal-RestAPI
This is an example of REST API implementation on DRUPAL.
<h2>Assuming That You Already Have Lando & Docker Installed</h2>


<h3>Setting Up the Module</h3>
First, setup a new custom Drupal module – See Creating Custom Modules more detail instructions on how to do this.

Let’s create a module name Sounds REST API. To do so, create a new directory in/modules/custom/ named Sounds_Rest_Api and add an info file for the module.

Example: Sounds_rest_api.info.yml

name: Sounds REST API
description: Define's a custom REST Resource
package: Custom
type: module
core: 9.x
Once that is all in place, you should be able to enable your new module in the Drupal Admin.


<h3>Creating the Resource Plugins</h3>
In order to create a custom REST service, you will need to become acquainted with Plugins. Plugins are small pieces of functionality that are swappable. Plugins that perform similar functionality are of the same plugin type. In the case of our custom resource, we need to extend the ResourceBase plugin, which can be found here

In order to implement a ResourceBase plugin in o-ur REST module, create a new fileSoundsResource.php in /src/Plugin/rest/resource/ directory of the Sounds REST API module and add the following:
Route parameters
The paths defined in the plugin's annotation can use placeholders the same way that routes do, whose values will be passed to the get() method if it has parameters whose names match the placeholders.

The request, route, and route match objects can also be passed to the get() method by typehinting them, the same way as controller callbacks.

Configuration
If you are using the REST UI contrib module, you should now be able to see it in the list of available endpoints and you should be able to configure the GET method.

You can also manually import the configuration – See REST Web Services overview for detailed instructions on how to configure REST services.
