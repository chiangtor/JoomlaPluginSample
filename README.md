JoomlaPluginSample
=================

Abstract:
--------

In Joomla 1.5.x, to import the external library with a pesudo plugin.

Installation:
-------------

<ul>
<li>
Compress the src directory.

For example: 
  <pre><code>
  tar czf mygroup-0.0.1.tar.gz mygroup
  </code></pre>

</li>
<li>
Login to the joomla 1.5 administator page.
   Go to the menu extension /install
   Upload the tarball.

  Notes: 
  *  Make sure the /plugins directory is writable by your web server process.

</li>
<li>
. Enable the plugin on plugins list at Joomla administrator page.
</li>

Usage Sample:
-------------

  in the controller or model files 
  <pre><code>
    JPluginHelper::importPlugin("mygroup", "myfunc" , false);
    // import MyClass from My Library
    myimport("mylib.myfunc");
    $myfunc = new myfunc();
   </code></pre>

   <pre><code>
    myimport("mylib.myclass");
    $myclass = new myclass();
    </code></pre>

   

