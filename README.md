# WpCommands - Background Task Plugin for Wordpress

## Getting started

To install it the most important prerequisite is to *already have a wordpress site up and running* obviously. Since 
this plugin is not *yet* part of the official wordpress repository, you will have to install it 
by manually placing the files into the correct folders. This means you will need to have 
*file system access* for your wordpress installation.

But dont fear an unnecessarily complicated setup process! This plugin can be installed by doing 
as little as *two manual steps*:

1) First download this repository and place it as a folder named "wpcommands" inside the "plugins" folder of your wordpress 
installation (If you dont know about the plugins folder it is located in 
"your_wordpress_folder/wp-content/plugins"). You can do this in two ways:
    - Use Git. That is the easiest solution. So if you already have git installed just clone this repository 
    into your plugins folder like this (Obviously using the path to your specific wordpress installation):
        ```bash
        git clone https://github.com/the16thpythonist/wp-commands-plugin {your wordpress path}/wp-content/plugins/wpcommands
        ```
    - Download this repository as a ZIP file. Move it to the plugins folder, extract it and rename the new resulting 
    folder to "wpcommands"
    
2) Now you only have to install the dependencies of the package correctly. Since you are already using wordpress I am 
going to assume, that you already have PHP installed on your system. To install just navigate into the newly created 
"wpcommands" folder and run the "install.php" script by running either of these commands:
    ```bash
    ./install.php
    ```
    ```bash
    php install.php
    ```

**And that's it!** The plugin is now ready.
The only thing you have to do now is to *activate it* from within the admin area of your wordpress site, as you 
would with any other Plugin.

## How does it work?

Most of the actual logic of this plugin has been written in a *separate package* and is only loaded using composer and 
then integrated using a simple API. This means the core functionality can be integrated into every wordpress plugin 
project! 

So, are you currently developing a wordpress plugin and just wish you would have some general facility for executing 
ever reoccurring, time-consuming background tasks right from the dashboard of your website? Then visit the source 
package [wp-commands](https://github.com/the16thpythonist/wp_commands) and find out how to 
**integrate it into your own project**!

## CHANGELOG

### 0.0.0.1 - 03.01.2018

- initial version