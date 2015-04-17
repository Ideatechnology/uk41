
    <!-- Docs page layout -->
    <div class="bs-docs-header" id="content">
      <div class="container">
        <h1>Getting started</h1>
        <p>An overview of Bootstrap, how to download and use, basic templates and examples, and more.</p>
        
      </div>
    </div>

    <div class="container bs-docs-container">

      <div class="row">
        
  <div class="col-md-9" role="main">
<!-- Getting started
================================================== -->
<div class="bs-docs-section">
  <h1 id="download" class="page-header">Download</h1>

  <p class="lead">Bootstrap has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</p>

  <div class="row bs-downloads">
    <div class="col-sm-4">
      <h3 id="download-bootstrap">Bootstrap</h3>
      <p>Compiled and minified CSS, JavaScript, and fonts. No docs or original source files are included.</p>
      <a href="" class="btn btn-lg btn-outline" role="button" onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'Download compiled']);">Download Bootstrap</a>
    </div>
    <div class="col-sm-4">
      <h3 id="download-source">Source code</h3>
      <p>Source Less, JavaScript, and font files, along with our docs. <strong>Requires a Less compiler and <a href="#compiling-css-and-javascript">some setup.</a></strong></p>
      <a href="" class="btn btn-lg btn-outline" role="button" onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'Download source']);">Download source</a>
    </div>
    <div class="col-sm-4">
      <h3 id="download-sass">Sass</h3>
      <p><a href="">Bootstrap ported from Less to Sass</a> for easy inclusion in Rails, Compass, or Sass-only projects.</p>
      <a href="" class="btn btn-lg btn-outline" role="button" onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'Download Sass']);">Download Sass</a>
    </div>
  </div>
  <p class="muted">Currently v.</p>

  <h3 id="download-cdn">Bootstrap CDN</h3>
  <p>The folks over at <a href="http://www.maxcdn.com/">MaxCDN</a> graciously provide CDN support for Bootstrap's CSS and JavaScript. Just use these <a href="http://www.bootstrapcdn.com/">Bootstrap CDN</a> links.</p>
<div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Latest compiled and minified CSS --&gt;</span>
<span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">&quot;stylesheet&quot;</span> <span class="na">href=</span><span class="s">&quot;&quot;</span><span class="nt">&gt;</span>

<span class="c">&lt;!-- Optional theme --&gt;</span>
<span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">&quot;stylesheet&quot;</span> <span class="na">href=</span><span class="s">&quot;&quot;</span><span class="nt">&gt;</span>

<span class="c">&lt;!-- Latest compiled and minified JavaScript --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">&quot;&quot;</span><span class="nt">&gt;&lt;/script&gt;</span>
</code></pre></div>

  <h3 id="download-bower">Install with Bower</h3>
  <p>Install and manage Bootstrap's Less, CSS, JavaScript, and fonts using <a href="http://bower.io">Bower</a>.</p>
  <div class="highlight"><pre><code class="bash"><span class="nv">$ </span>bower install bootstrap
</code></pre></div>
</div>



<!-- File structure
================================================== -->
<div class="bs-docs-section">
  <h1 id="whats-included" class="page-header">What's included</h1>

  <p class="lead">Bootstrap is downloadable in two forms, within which you'll find the following directories and files, logically grouping common resources and providing both compiled and minified variations.</p>

  <div class="bs-callout bs-callout-warning" id="jquery-required">
    <h4>jQuery required</h4>
    <p>Please note that <strong>all JavaScript plugins require jQuery</strong> to be included, as shown in the <a href="#template">starter template</a>. <a href="/blob/v/bower.json">Consult our <code>bower.json</code></a> to see which versions of jQuery are supported.</p>
  </div>

  <h2 id="whats-included-precompiled">Precompiled Bootstrap</h2>
  <p>Once downloaded, unzip the compressed folder to see the structure of (the compiled) Bootstrap. You'll see something like this:</p>
<!-- NOTE: This info is intentionally duplicated in the README.
Copy any changes made here over to the README too. -->
<div class="highlight"><pre><code class="bash">bootstrap/
├── css/
│   ├── bootstrap.css
│   ├── bootstrap.min.css
│   ├── bootstrap-theme.css
│   └── bootstrap-theme.min.css
├── js/
│   ├── bootstrap.js
│   └── bootstrap.min.js
└── fonts/
    ├── glyphicons-halflings-regular.eot
    ├── glyphicons-halflings-regular.svg
    ├── glyphicons-halflings-regular.ttf
    └── glyphicons-halflings-regular.woff
</code></pre></div>

  <p>This is the most basic form of Bootstrap: precompiled files for quick drop-in usage in nearly any web project. We provide compiled CSS and JS (<code>bootstrap.*</code>), as well as compiled and minified CSS and JS (<code>bootstrap.min.*</code>). Fonts from Glyphicons are included, as is the optional Bootstrap theme.</p>

  <h2 id="whats-included-source">Bootstrap source code</h2>
  <p>The Bootstrap source code download includes the precompiled CSS, JavaScript, and font assets, along with source Less, JavaScript, and documentation. More specifically, it includes the following and more:</p>
<div class="highlight"><pre><code class="bash">bootstrap/
├── less/
├── js/
├── fonts/
├── dist/
│   ├── css/
│   ├── js/
│   └── fonts/
└── docs/
    └── examples/
</code></pre></div>
  <p>The <code>less/</code>, <code>js/</code>, and <code>fonts/</code> are the source code for our CSS, JS, and icon fonts (respectively). The <code>dist/</code> folder includes everything listed in the precompiled download section above. The <code>docs/</code> folder includes the source code for our documentation, and <code>examples/</code> of Bootstrap usage. Beyond that, any other included file provides support for packages, license information, and development.</p>
</div>



<!-- Template
================================================== -->
<div class="bs-docs-section">
  <h1 id="template" class="page-header">Basic template</h1>

  <p class="lead">Start with this basic HTML template, or modify <a href="#examples">these examples</a>. We hope you'll customize our templates and examples, adapting them to suit your needs.</p>

  <p>Copy the HTML below to begin working with a minimal Bootstrap document.</p>
<div class="highlight"><pre><code class="html"><span class="cp">&lt;!DOCTYPE html&gt;</span>
<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">&quot;en&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;head&gt;</span>
    <span class="nt">&lt;meta</span> <span class="na">charset=</span><span class="s">&quot;utf-8&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;meta</span> <span class="na">http-equiv=</span><span class="s">&quot;X-UA-Compatible&quot;</span> <span class="na">content=</span><span class="s">&quot;IE=edge&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">&quot;viewport&quot;</span> <span class="na">content=</span><span class="s">&quot;width=device-width, initial-scale=1&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;title&gt;</span>Bootstrap 101 Template<span class="nt">&lt;/title&gt;</span>

    <span class="c">&lt;!-- Bootstrap --&gt;</span>
    <span class="nt">&lt;link</span> <span class="na">href=</span><span class="s">&quot;css/bootstrap.min.css&quot;</span> <span class="na">rel=</span><span class="s">&quot;stylesheet&quot;</span><span class="nt">&gt;</span>

    <span class="c">&lt;!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --&gt;</span>
    <span class="c">&lt;!-- WARNING: Respond.js doesn&#39;t work if you view the page via file:// --&gt;</span>
    <span class="c">&lt;!--[if lt IE 9]&gt;</span>
<span class="c">      &lt;script src=&quot;https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js&quot;&gt;&lt;/script&gt;</span>
<span class="c">      &lt;script src=&quot;https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js&quot;&gt;&lt;/script&gt;</span>
<span class="c">    &lt;![endif]--&gt;</span>
  <span class="nt">&lt;/head&gt;</span>
  <span class="nt">&lt;body&gt;</span>
    <span class="nt">&lt;h1&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>

    <span class="c">&lt;!-- jQuery (necessary for Bootstrap&#39;s JavaScript plugins) --&gt;</span>
    <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">&quot;https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js&quot;</span><span class="nt">&gt;&lt;/script&gt;</span>
    <span class="c">&lt;!-- Include all compiled plugins (below), or include individual files as needed --&gt;</span>
    <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">&quot;js/bootstrap.min.js&quot;</span><span class="nt">&gt;&lt;/script&gt;</span>
  <span class="nt">&lt;/body&gt;</span>
<span class="nt">&lt;/html&gt;</span>
</code></pre></div>
</div>



<!-- Examples
================================================== -->
<div class="bs-docs-section">
  <h1 id="examples" class="page-header">Examples</h1>

  <p class="lead">Build on the basic template above with Bootstrap's many components. See also <a href="#customizing">Customizing Bootstrap</a> for tips on maintaining your own Bootstrap variants.</p>

  <h3 id="examples-framework">Using the framework</h3>
  <div class="row bs-examples">
    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/starter-template/">
        <img src="../examples/screenshots/starter-template.jpg" alt="">
      </a>
      <h4>Starter template</h4>
      <p>Nothing but the basics: compiled CSS and JavaScript along with a container.</p>
    </div>
    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/theme/">
        <img src="../examples/screenshots/theme.jpg" alt="">
      </a>
      <h4>Bootstrap theme</h4>
      <p>Load the optional Bootstrap theme for a visually enhanced experience.</p>
    </div>
    <div class="clearfix visible-xs"></div>

    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/grid/">
        <img src="../examples/screenshots/grid.jpg" alt="">
      </a>
      <h4>Grids</h4>
      <p>Multiple examples of grid layouts with all four tiers, nesting, and more.</p>
    </div>
    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/jumbotron/">
        <img src="../examples/screenshots/jumbotron.jpg" alt="">
      </a>
      <h4>Jumbotron</h4>
      <p>Build around the jumbotron with a navbar and some basic grid columns.</p>
    </div>
    <div class="clearfix visible-xs"></div>

    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/jumbotron-narrow/">
        <img src="../examples/screenshots/jumbotron-narrow.jpg" alt="">
      </a>
      <h4>Narrow jumbotron</h4>
      <p>Build a more custom page by narrowing the default container and jumbotron.</p>
    </div>
  </div>

  <h3 id="examples-navbars">Navbars in action</h3>
  <div class="row bs-examples">
    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/navbar/">
        <img src="../examples/screenshots/navbar.jpg" alt="">
      </a>
      <h4>Navbar</h4>
      <p>Super basic template that includes the navbar along with some additional content.</p>
    </div>
    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/navbar-static-top/">
        <img src="../examples/screenshots/navbar-static.jpg" alt="">
      </a>
      <h4>Static top navbar</h4>
      <p>Super basic template with a static top navbar along with some additional content.</p>
    </div>
    <div class="clearfix visible-xs"></div>

    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/navbar-fixed-top/">
        <img src="../examples/screenshots/navbar-fixed.jpg" alt="">
      </a>
      <h4>Fixed navbar</h4>
      <p>Super basic template with a fixed top navbar along with some additional content.</p>
    </div>
  </div>

  <h3 id="examples-custom">Custom components</h3>
  <div class="row bs-examples">
    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/cover/">
        <img src="../examples/screenshots/cover.jpg" alt="">
      </a>
      <h4>Cover</h4>
      <p>A one-page template for building simple and beautiful home pages.</p>
    </div>
    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/carousel/">
        <img src="../examples/screenshots/carousel.jpg" alt="">
      </a>
      <h4>Carousel</h4>
      <p>Customize the navbar and carousel, then add some new components.</p>
    </div>
    <div class="clearfix visible-xs"></div>

    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/blog/">
        <img src="../examples/screenshots/blog.jpg" alt="">
      </a>
      <h4>Blog</h4>
      <p>Simple two-column blog layout with custom navigation, header, and type.</p>
    </div>
    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/dashboard/">
        <img src="../examples/screenshots/dashboard.jpg" alt="">
      </a>
      <h4>Dashboard</h4>
      <p>Basic structure for a admin dashboard with fixed sidebar and navbar.</p>
    </div>
    <div class="clearfix visible-xs"></div>

    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/signin/">
        <img src="../examples/screenshots/sign-in.jpg" alt="">
      </a>
      <h4>Sign-in page</h4>
      <p>Custom form layout and design for a simple sign in form.</p>
    </div>
    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/justified-nav/">
        <img src="../examples/screenshots/justified-nav.jpg" alt="">
      </a>
      <h4>Justified nav</h4>
      <p>Create a custom navbar with justified links. Heads up! <a href="../components/#nav-justified">Not too WebKit friendly.</a></p>
    </div>
    <div class="clearfix visible-xs"></div>

    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/sticky-footer/">
        <img src="../examples/screenshots/sticky-footer.jpg" alt="">
      </a>
      <h4>Sticky footer</h4>
      <p>Attach a footer to the bottom of the viewport when the content is shorter than it.</p>
    </div>
    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/sticky-footer-navbar/">
        <img src="../examples/screenshots/sticky-footer-navbar.jpg" alt="">
      </a>
      <h4>Sticky footer with navbar</h4>
      <p>Attach a footer to the bottom of the viewport with a fixed navbar at the top.</p>
    </div>
  </div>

  <h3 id="examples-experiments">Experiments</h3>
  <div class="row bs-examples">
    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/non-responsive/">
        <img src="../examples/screenshots/non-responsive.jpg" alt="">
      </a>
      <h4>Non-responsive Bootstrap</h4>
      <p>Easily disable the responsiveness of Bootstrap <a href="#disable-responsive">per our docs</a>.</p>
    </div>
    <div class="col-xs-6 col-md-4">
      <a class="thumbnail" href="../examples/offcanvas/">
        <img src="../examples/screenshots/offcanvas.jpg" alt="">
      </a>
      <h4>Offcanvas</h4>
      <p>Build a toggleable off-canvas navigation menu for use with Bootstrap.</p>
    </div>
  </div>
</div>



<!-- Community
================================================== -->
<div class="bs-docs-section">
  <h1 id="community" class="page-header">Community</h1>

  <p class="lead">Stay up to date on the development of Bootstrap and reach out to the community with these helpful resources.</p>
  <ul>
    <li>Read and subscribe to <a href="http://blog.getbootstrap.com/">The Official Bootstrap Blog</a>.</li>
    <li>Chat with fellow Bootstrappers using IRC in the <code>irc.freenode.net</code> server, in the <a href="irc://irc.freenode.net/#twitter-bootstrap">##twitter-bootstrap channel</a>.</li>
    <li>For help using Bootstrap, ask on <a href="http://stackoverflow.com/questions/tagged/twitter-bootstrap-3">StackOverflow using the tag <code>twitter-bootstrap-3</code></a>.</li>
    <li>Find inspiring examples of people building with Bootstrap at the <a href="http://expo.getbootstrap.com">Bootstrap Expo</a>.</li>
  </ul>
  <p>You can also follow <a href="https://twitter.com/twbootstrap">@twbootstrap on Twitter</a> for the latest gossip and awesome music videos.</p>
</div>



<!-- Disabling responsiveness
================================================== -->
<div class="bs-docs-section">
  <h1 id="disable-responsive" class="page-header">Disabling responsiveness</h1>

  <p class="lead">Bootstrap automatically adapts your pages for various screen sizes.
    Here's how to disable this feature so your page works like in <a href="../examples/non-responsive/">this non-responsive example</a>.</p>

  <h3>Steps to disable page responsiveness</h3>
  <ol>
    <li>Omit the viewport <code>&lt;meta&gt;</code> mentioned in <a href="../css/#overview-mobile">the CSS docs</a></li>
    <li>Override the <code>width</code> on the <code>.container</code> for each grid tier with a single width, for example <code>width: 970px !important;</code> Be sure that this comes after the default Bootstrap CSS. You can optionally avoid the <code>!important</code> with media queries or some selector-fu.</li>
    <li>If using navbars, remove all navbar collapsing and expanding behavior.</li>
    <li>For grid layouts, use <code>.col-xs-*</code> classes in addition to, or in place of, the medium/large ones. Don't worry, the extra-small device grid scales to all resolutions.</li>
  </ol>
  <p>You'll still need Respond.js for IE8 (since our media queries are still there and need to be processed).
    This disables the "mobile site" aspects of Bootstrap.</p>

  <h3>Bootstrap template with responsiveness disabled</h3>
  <p>We've applied these steps to an example. Read its source code to see the specific changes implemented.</p>
  <p>
    <a href="../examples/non-responsive/" class="btn btn-primary">View non-responsive example</a>
  </p>
</div>



<!-- Cross link to new migration page -->
<div class="bs-callout bs-callout-info" id="migration">
  <h4>Migrating from v2.x to v3.x</h4>
  <p>Looking to migrate from an older version of Bootstrap to v3.x? Check out <a href="../migration">our migration guide</a>.</p>
</div>



<!-- Browser support
================================================== -->
<div class="bs-docs-section">
  <h1 id="support" class="page-header">Browser and device support</h1>
  <p class="lead">Bootstrap is built to work best in the latest desktop and mobile browsers, meaning older browsers might display differently styled, though fully functional, renderings of certain components.</p>

  <h3 id="support-browsers">Supported browsers</h3>
  <p>Specifically, we support the <strong>latest versions</strong> of the following browsers and platforms. On Windows, <strong>we support Internet Explorer 8-11</strong>. More specific support information is provided below.</p>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <td></td>
          <th>Chrome</th>
          <th>Firefox</th>
          <th>Internet Explorer</th>
          <th>Opera</th>
          <th>Safari</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>Android</th>
          <td class="text-success"><span class="glyphicon glyphicon-ok"></span> <span class="sr-only">Supported</span></td>
          <td class="text-danger"><span class="glyphicon glyphicon-remove"></span> <span class="sr-only">Not Supported</span></td>
          <td class="text-muted" rowspan="3" style="vertical-align: middle;">N/A</td>
          <td class="text-danger"><span class="glyphicon glyphicon-remove"></span> <span class="sr-only">Not Supported</span></td>
          <td class="text-muted">N/A</td>
        </tr>
        <tr>
          <th>iOS</th>
          <td class="text-success"><span class="glyphicon glyphicon-ok"></span> <span class="sr-only">Supported</span></td>
          <td class="text-muted">N/A</td>
          <td class="text-danger"><span class="glyphicon glyphicon-remove"></span> <span class="sr-only">Not Supported</span></td>
          <td class="text-success"><span class="glyphicon glyphicon-ok"></span> <span class="sr-only">Supported</span></td>
        </tr>
        <tr>
          <th>Mac OS X</th>
          <td class="text-success"><span class="glyphicon glyphicon-ok"></span> <span class="sr-only">Supported</span></td>
          <td class="text-success"><span class="glyphicon glyphicon-ok"></span> <span class="sr-only">Supported</span></td>
          <td class="text-success"><span class="glyphicon glyphicon-ok"></span> <span class="sr-only">Supported</span></td>
          <td class="text-success"><span class="glyphicon glyphicon-ok"></span> <span class="sr-only">Supported</span></td>
        </tr>
        <tr>
          <th>Windows</th>
          <td class="text-success"><span class="glyphicon glyphicon-ok"></span> <span class="sr-only">Supported</span></td>
          <td class="text-success"><span class="glyphicon glyphicon-ok"></span> <span class="sr-only">Supported</span></td>
          <td class="text-success"><span class="glyphicon glyphicon-ok"></span> <span class="sr-only">Supported</span></td>
          <td class="text-success"><span class="glyphicon glyphicon-ok"></span> <span class="sr-only">Supported</span></td>
          <td class="text-danger"><span class="glyphicon glyphicon-remove"></span> <span class="sr-only">Not Supported</span></td>
        </tr>
      </tbody>
    </table>
  </div>
  <p>Unofficially, Bootstrap should look and behave well enough in Chromium and Chrome for Linux, Firefox for Linux, and Internet Explorer 7, though they are not officially supported.</p>

  <h3 id="support-ie8-ie9">Internet Explorer 8 and 9</h3>
  <p>Internet Explorer 8 and 9 are also supported, however, please be aware that some CSS3 properties and HTML5 elements are not fully supported by these browsers. In addition, <strong>Internet Explorer 8 requires the use of <a href="https://github.com/scottjehl/Respond">Respond.js</a> to enable media query support.</strong></p>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col" class="col-xs-4">Feature</th>
          <th scope="col" class="col-xs-4">Internet Explorer 8</th>
          <th scope="col" class="col-xs-4">Internet Explorer 9</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><code>border-radius</code></th>
          <td class="text-danger"><span class="glyphicon glyphicon-remove"></span> Not supported</td>
          <td class="text-success"><span class="glyphicon glyphicon-ok"></span> Supported</td>
        </tr>
        <tr>
          <th scope="row"><code>box-shadow</code></th>
          <td class="text-danger"><span class="glyphicon glyphicon-remove"></span> Not supported</td>
          <td class="text-success"><span class="glyphicon glyphicon-ok"></span> Supported</td>
        </tr>
        <tr>
          <th scope="row"><code>transform</code></th>
          <td class="text-danger"><span class="glyphicon glyphicon-remove"></span> Not supported</td>
          <td class="text-success"><span class="glyphicon glyphicon-ok"></span> Supported, with <code>-ms</code> prefix</td>
        </tr>
        <tr>
          <th scope="row"><code>transition</code></th>
          <td colspan="2" class="text-danger"><span class="glyphicon glyphicon-remove"></span> Not supported</td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <th scope="row"><code>placeholder</code></th>
          <td colspan="2" class="text-danger"><span class="glyphicon glyphicon-remove"></span> Not supported</td>
        </tr>
      </tbody>
    </table>
  </div>

  <p>Visit <a href="http://caniuse.com/">Can I use...</a> for details on browser support of CSS3 and HTML5 features.</p>

  <h3 id="support-ie8-respondjs">Internet Explorer 8 and Respond.js</h3>
  <p>Beware of the following caveats when using Respond.js in your development and production environments for Internet Explorer 8.</p>
  <h4 id="respond-js-x-domain">Respond.js and cross-domain CSS</h4>
  <p>Using Respond.js with CSS hosted on a different (sub)domain (for example, on a CDN) requires some additional setup. <a href="https://github.com/scottjehl/Respond/blob/master/README.md#cdnx-domain-setup">See the Respond.js docs</a> for details.</p>
  <h4 id="respond-file-proto">Respond.js and <code>file://</code></h4>
  <p>Due to browser security rules, Respond.js doesn't work with pages viewed via the <code>file://</code> protocol (like when opening a local HTML file). To test responsive features in IE8, view your pages over HTTP(S). <a href="https://github.com/scottjehl/Respond/blob/master/README.md#support--caveats">See the Respond.js docs</a> for details.</p>
  <h4 id="respond-import">Respond.js and <code>@import</code></h4>
  <p>Respond.js doesn't work with CSS that's referenced via <code>@import</code>. In particular, some Drupal configurations are known to use <code>@import</code>. <a href="https://github.com/scottjehl/Respond/blob/master/README.md#support--caveats">See the Respond.js docs</a> for details.</p>

  <h3 id="support-ie8-box-sizing">Internet Explorer 8 and box-sizing</h3>
  <p>IE8 does not fully support <code>box-sizing: border-box;</code> when combined with <code>min-width</code>, <code>max-width</code>, <code>min-height</code>, or <code>max-height</code>. For that reason, as of v3.0.1, we no longer use <code>max-width</code> on <code>.container</code>s.</p>

  <h3 id="support-ie-compatibility-modes">IE Compatibility modes</h3>
  <p>Bootstrap is not supported in the old Internet Explorer compatibility modes. To be sure you're using the latest rendering mode for IE, consider including the appropriate <code>&lt;meta&gt;</code> tag in your pages:</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;meta</span> <span class="na">http-equiv=</span><span class="s">&quot;X-UA-Compatible&quot;</span> <span class="na">content=</span><span class="s">&quot;IE=edge&quot;</span><span class="nt">&gt;</span>
</code></pre></div>
  <p>Confirm the document mode by opening the debugging tools: press <kbd>F12</kbd> and check the "Document Mode".</p>
  <p>This tag is included in all Bootstrap's documentation and examples to ensure the best rendering possible in each supported version of Internet Explorer.</p>
  <p>See <a href="http://stackoverflow.com/questions/6771258/whats-the-difference-if-meta-http-equiv-x-ua-compatible-content-ie-edge">this StackOverflow question</a> for more information.</p>

  <h3 id="support-ie10-width">Internet Explorer 10 in Windows 8 and Windows Phone 8</h3>
  <p>Internet Explorer 10 doesn't differentiate <strong>device width</strong> from <strong>viewport width</strong>, and thus doesn't properly apply the media queries in Bootstrap's CSS. Normally you'd just add a quick snippet of CSS to fix this:</p>
<div class="highlight"><pre><code class="scss"><span class="k">@-ms-viewport</span>       <span class="p">{</span> <span class="na">width</span><span class="o">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span>
</code></pre></div>
  <p>However, this doesn't work for devices running Windows Phone 8 versions older than <a href="http://blogs.windows.com/windows_phone/b/wpdev/archive/2013/10/14/introducing-windows-phone-preview-for-developers.aspx">Update 3 (a.k.a. GDR3)</a>, as it causes such devices to show a mostly desktop view instead of narrow "phone" view. To address this, you'll need to <strong>include the following CSS and JavaScript to work around the bug</strong>.</p>
<div class="highlight"><pre><code class="scss"><span class="k">@-webkit-viewport</span>   <span class="p">{</span> <span class="na">width</span><span class="o">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span>
<span class="k">@-moz-viewport</span>      <span class="p">{</span> <span class="na">width</span><span class="o">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span>
<span class="k">@-ms-viewport</span>       <span class="p">{</span> <span class="na">width</span><span class="o">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span>
<span class="k">@-o-viewport</span>        <span class="p">{</span> <span class="na">width</span><span class="o">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span>
<span class="k">@viewport</span>           <span class="p">{</span> <span class="na">width</span><span class="o">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span>
</code></pre></div>

<div class="highlight"><pre><code class="js"><span class="k">if</span> <span class="p">(</span><span class="nx">navigator</span><span class="p">.</span><span class="nx">userAgent</span><span class="p">.</span><span class="nx">match</span><span class="p">(</span><span class="sr">/IEMobile\/10\.0/</span><span class="p">))</span> <span class="p">{</span>
  <span class="kd">var</span> <span class="nx">msViewportStyle</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">createElement</span><span class="p">(</span><span class="s1">&#39;style&#39;</span><span class="p">)</span>
  <span class="nx">msViewportStyle</span><span class="p">.</span><span class="nx">appendChild</span><span class="p">(</span>
    <span class="nb">document</span><span class="p">.</span><span class="nx">createTextNode</span><span class="p">(</span>
      <span class="s1">&#39;@-ms-viewport{width:auto!important}&#39;</span>
    <span class="p">)</span>
  <span class="p">)</span>
  <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;head&#39;</span><span class="p">).</span><span class="nx">appendChild</span><span class="p">(</span><span class="nx">msViewportStyle</span><span class="p">)</span>
<span class="p">}</span>
</code></pre></div>
  <p>For more information and usage guidelines, read <a href="http://timkadlec.com/2013/01/windows-phone-8-and-device-width/">Windows Phone 8 and Device-Width</a>.</p>
  <p>As a heads up, we include this in the Bootstrap docs as an example.</p>

  <h3 id="support-safari-percentages">Safari percent rounding</h3>
  <p>As of Safari v6.1 for OS X and Safari for iOS v7.0.1, Safari's rendering engine has some trouble with the number of decimal places used in our <code>.col-*-1</code> grid classes. So if you have 12 individual grid columns, you'll notice that they come up short compared to other rows of columns. We can't do much here (<a href="https://github.com/twbs/bootstrap/issues/9282">see #9282</a>) but you do have some options:</p>
  <ul>
    <li>Add <code>.pull-right</code> to your last grid column to get the hard-right alignment</li>
    <li>Tweak your percentages manually to get the perfect rounding for Safari (more difficult than the first option)</li>
  </ul>
  <p>We'll keep an eye on this though and update our code if we have an easy solution.</p>

  <h3 id="support-fixed-position-keyboards">Modals, navbars, and virtual keyboards</h3>
  <h4>Overflow and scrolling</h4>
  <p>Support for <code>overflow: hidden</code> on the <code>&lt;body&gt;</code> element is quite limited in iOS and Android. To that end, when you scroll past the top or bottom of a modal in either of those devices' browsers, the <code>&lt;body&gt;</code> content will begin to scroll.</p>
  <h4>Virtual keyboards</h4>
  <p>Also, note that if you're using inputs in your modal or navbar, iOS has a rendering bug that doesn't update the position of fixed elements when the virtual keyboard is triggered. A few workarounds for this include transforming your elements to <code>position: absolute</code> or invoking a timer on focus to try to correct the positioning manually. This is not handled by Bootstrap, so it is up to you to decide which solution is best for your application.</p>
  <h4>Navbar Dropdowns</h4>
  <p>The <code>.dropdown-backdrop</code> element isn't used on iOS in the nav because of the complexity of z-indexing. Thus, to close dropdowns in navbars, you must directly click the dropdown element (or any other element which will fire a click event in iOS).</p>

  <h3 id="support-browser-zooming">Browser zooming</h3>
  <p>Page zooming inevitably presents rendering artifacts in some components, both in Bootstrap and the rest of the web. Depending on the issue, we may be able to fix it (search first and then open an issue if need be). However, we tend to ignore these as they often have no direct solution other than hacky workarounds.</p>

  <h3 id="support-printing">Printer viewports</h3>
  <p>Even in some modern browsers, printing can be quirky. In particular, as of Chrome v32 and regardless of margin settings, Chrome uses a viewport width significantly narrower than the physical paper size when resolving media queries while printing a webpage. This can result in Bootstrap's extra-small grid being unexpectedly activated when printing. <a href="https://github.com/twbs/bootstrap/issues/12078">See #12078 for some details.</a> Suggested workarounds:</p>
  <ul>
    <li>Embrace the extra-small grid and make sure your page looks acceptable under it.</li>
    <li>Customize the values of the <code>@screen-*</code> Less variables so that your printer paper is considered larger than extra-small.</li>
    <li>Add custom media queries to change the grid size breakpoints for print media only.</li>
  </ul>

  <h3 id="support-android-stock-browser">Android stock browser</h3>
  <p>Out of the box, Android 4.1 (and even some newer releases apparently) ship with the Browser app as the default web browser of choice (as opposed to Chrome). Unfortunately, the Browser app has lots of bugs and inconsistencies with CSS in general.</p>
  <h4>Select menus</h4>
  <p>On <code>&lt;select&gt;</code> elements, the Android stock browser will not display the side controls if there is a <code>border-radius</code> and/or <code>border</code> applied. Use the snippet of code below to remove the offending CSS and render the <code>&lt;select&gt;</code> as an unstyled element on the Android stock browser. The user agent sniffing avoids interference with Chrome, Safari, and Mozilla browsers.</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;script&gt;</span>
<span class="kd">var</span> <span class="nx">nua</span> <span class="o">=</span> <span class="nx">navigator</span><span class="p">.</span><span class="nx">userAgent</span>
<span class="kd">var</span> <span class="nx">isAndroid</span> <span class="o">=</span> <span class="p">(</span><span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">&#39;Mozilla/5.0&#39;</span><span class="p">)</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">&#39;Android &#39;</span><span class="p">)</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">&#39;AppleWebKit&#39;</span><span class="p">)</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">&#39;Chrome&#39;</span><span class="p">)</span> <span class="o">===</span> <span class="o">-</span><span class="mi">1</span><span class="p">)</span>
<span class="k">if</span> <span class="p">(</span><span class="nx">isAndroid</span><span class="p">)</span> <span class="p">{</span>
  <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;select.form-control&#39;</span><span class="p">).</span><span class="nx">removeClass</span><span class="p">(</span><span class="s1">&#39;form-control&#39;</span><span class="p">).</span><span class="nx">css</span><span class="p">(</span><span class="s1">&#39;width&#39;</span><span class="p">,</span> <span class="s1">&#39;100%&#39;</span><span class="p">)</span>
<span class="p">}</span>
<span class="nt">&lt;/script&gt;</span>
</code></pre></div>
  <p>Want to see an example? <a href="http://jsbin.com/OyaqoDO/2">Check out this JS Bin demo.</a></p>
</div>



<!-- Third party support
================================================== -->
<div class="bs-docs-section">
  <h1 id="third-parties" class="page-header">Third party support</h1>
  <p class="lead">While we don't officially support any third party plugins or add-ons, we do offer some useful advice to help avoid potential issues in your projects.</p>

  <h3 id="third-box-sizing">Box-sizing</h3>
  <p>Some third party software, including Google Maps and Google Custom Search Engine, conflict with Bootstrap due to <code>* { box-sizing: border-box; }</code>, a rule which makes it so <code>padding</code> does not affect the final computed width of an element. Learn more about <a href="http://css-tricks.com/box-sizing/">box model and sizing at CSS Tricks</a>.</p>
  <p>Depending on the context, you may override as-needed (Option 1) or reset the box-sizing for entire regions (Option 2).</p>
<div class="highlight"><pre><code class="scss"><span class="cm">/* Box-sizing resets</span>
<span class="cm"> *</span>
<span class="cm"> * Reset individual elements or override regions to avoid conflicts due to</span>
<span class="cm"> * global box model settings of Bootstrap. Two options, individual overrides and</span>
<span class="cm"> * region resets, are available as plain CSS and uncompiled Less formats.</span>
<span class="cm"> */</span>

<span class="cm">/* Option 1A: Override a single element&#39;s box model via CSS */</span>
<span class="nc">.element</span> <span class="p">{</span>
  <span class="na">-webkit-box-sizing</span><span class="o">:</span> <span class="no">content</span><span class="o">-</span><span class="n">box</span><span class="p">;</span>
     <span class="na">-moz-box-sizing</span><span class="o">:</span> <span class="no">content</span><span class="o">-</span><span class="n">box</span><span class="p">;</span>
          <span class="na">box-sizing</span><span class="o">:</span> <span class="no">content</span><span class="o">-</span><span class="n">box</span><span class="p">;</span>
<span class="p">}</span>

<span class="cm">/* Option 1B: Override a single element&#39;s box model by using a Bootstrap Less mixin */</span>
<span class="nc">.element</span> <span class="p">{</span>
  <span class="nc">.box-sizing</span><span class="o">(</span><span class="nt">content-box</span><span class="o">);</span>
<span class="p">}</span>

<span class="cm">/* Option 2A: Reset an entire region via CSS */</span>
<span class="nc">.reset-box-sizing</span><span class="o">,</span>
<span class="nc">.reset-box-sizing</span> <span class="o">*,</span>
<span class="nc">.reset-box-sizing</span> <span class="o">*</span><span class="nd">:before</span><span class="o">,</span>
<span class="nc">.reset-box-sizing</span> <span class="o">*</span><span class="nd">:after</span> <span class="p">{</span>
  <span class="na">-webkit-box-sizing</span><span class="o">:</span> <span class="no">content</span><span class="o">-</span><span class="n">box</span><span class="p">;</span>
     <span class="na">-moz-box-sizing</span><span class="o">:</span> <span class="no">content</span><span class="o">-</span><span class="n">box</span><span class="p">;</span>
          <span class="na">box-sizing</span><span class="o">:</span> <span class="no">content</span><span class="o">-</span><span class="n">box</span><span class="p">;</span>
<span class="p">}</span>

<span class="cm">/* Option 2B: Reset an entire region with a custom Less mixin */</span>
<span class="nc">.reset-box-sizing</span> <span class="p">{</span>
  <span class="k">&amp;</span><span class="o">,</span>
  <span class="o">*,</span>
  <span class="o">*</span><span class="nd">:before</span><span class="o">,</span>
  <span class="o">*</span><span class="nd">:after</span> <span class="p">{</span>
    <span class="nc">.box-sizing</span><span class="o">(</span><span class="nt">content-box</span><span class="o">);</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.element</span> <span class="p">{</span>
  <span class="nc">.reset-box-sizing</span><span class="o">();</span>
<span class="p">}</span>
</code></pre></div>
</div>



<!-- Accessibility
================================================== -->
<div class="bs-docs-section">
  <h1 id="accessibility" class="page-header">Accessibility</h1>
  <p class="lead">Bootstrap follows common web standards and&mdash;with minimal extra effort&mdash;can be used to create sites that are accessible to those using <abbr title="Assistive Technology" class="initialism">AT</abbr>.</p>

  <h3>Skip navigation</h3>
  <p>If your navigation contains many links and comes before the main content in the DOM, add a <code>Skip to main content</code> link immediately after your opening <code>&lt;body&gt;</code> tag. <a href="http://a11yproject.com/posts/skip-nav-links/">(read why)</a></p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;body&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#content&quot;</span> <span class="na">class=</span><span class="s">&quot;sr-only&quot;</span><span class="nt">&gt;</span>Skip to main content<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;container&quot;</span> <span class="na">id=</span><span class="s">&quot;content&quot;</span><span class="nt">&gt;</span>
    The main page content.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/body&gt;</span>
</code></pre></div>

  <h3>Nested headings</h3>
  <p>When nesting headings (<code>&lt;h1&gt;</code> - <code>&lt;h6&gt;</code>), your primary document header should be an <code>&lt;h1&gt;</code>. Subsequent headings should make logical use of <code>&lt;h2&gt;</code> - <code>&lt;h6&gt;</code> such that screen readers can construct a table of contents for your pages.</p>
  <p>Learn more at <a href="http://squizlabs.github.io/HTML_CodeSniffer/Standards/Section508/">HTML CodeSniffer</a> and <a href="http://accessibility.psu.edu/headings">Penn State's AccessAbility</a>.</p>

  <h3>Additional resources</h3>
  <ul>
    <li><a href="https://github.com/squizlabs/HTML_CodeSniffer">"HTML Codesniffer" bookmarklet for identifying accessibility issues</a></li>
    <li><a href="http://a11yproject.com/">The A11Y Project</a></li>
    <li><a href="https://developer.mozilla.org/en-US/docs/Accessibility">MDN accessibility documentation</a></li>
  </ul>
</div>



<!-- License FAQs
================================================== -->
<div class="bs-docs-section">
  <h1 id="license-faqs" class="page-header">License FAQs</h1>
  <p class="lead">Bootstrap is released under the MIT license and is copyright 2014 Twitter. Boiled down to smaller chunks, it can be described with the following conditions.</p>

  <h4>It requires you to:</h4>
  <ul>
    <li>Include the license and copyright notice in your works</li>
  </ul>

  <h4>It permits you to:</h4>
  <ul>
    <li>Freely download and use Bootstrap, in whole or in part, for personal, private, company internal, or commercial purposes</li>
    <li>Use Bootstrap in packages or distributions that you create</li>
    <li>Modify the source code</li>
    <li>Grant a sublicense to modify and distribute Bootstrap to third parties not included in the license</li>
  </ul>

  <h4>It forbids you to:</h4>
  <ul>
    <li>Hold the authors and license owners liable for damages as Bootstrap is provided without warranty</li>
    <li>Hold the creators or copyright holders of Bootstrap liable</li>
    <li>Redistribute any piece of Bootstrap without proper attribution</li>
    <li>Use any marks owned by Twitter in any way that might state or imply that Twitter endorses your distribution</li>
    <li>Use any marks owned by Twitter in any way that might state or imply that you created the Twitter software in question</li>
  </ul>

  <h4>It does not require you to:</h4>
  <ul>
    <li>Include the source of Bootstrap itself, or of any modifications you may have made to it, in any redistribution you may assemble that includes it</li>
    <li>Submit changes that you make to Bootstrap back to the Bootstrap project (though such feedback is encouraged)</li>
  </ul>

  <p>The full Bootstrap license is located <a href="/blob/master/LICENSE">in the project repository</a> for more information.</p>
</div><!-- /.bs-docs-section -->


<div class="bs-docs-section">
  <h1 id="customizing" class="page-header">Customizing Bootstrap</h1>
  <p class="lead">Bootstrap is best maintained when you treat it as a separate and independently-versioned dependency in your development environment. Doing this makes upgrading Bootstrap easier in the future.</p>

  <p>Once you've downloaded and included Bootstrap's styles and scripts, you can customize its components. Just create a new stylesheet (Less, if you like, or just plain CSS) to house your customizations.</p>

  <div class="bs-callout bs-callout-info">
    <h4>Compiled or minified?</h4>
    <p>Unless you plan on reading the CSS, go with minified stylesheets. It's the same code, just compacted. Minified styles use less bandwidth, which is good, especially in production environments.</p>
  </div>

  <p>From there, include whatever Bootstrap components and HTML content you need to create templates for your site's pages.</p>

  <h3>Customizing components</h3>
  <p>You can customize components to varying degrees, but most fall into two camps: <em>light customizations</em> and <em>overhauls</em>. Plenty examples of both are available from third parties.</p>
  <p>We define <em>light customizations</em> as superficial changes, for example, color and font changes to existing Bootstrap components. A light customization example is the <a href="http://translate.twitter.com">Twitter Translation Center</a> (coded by <a href="https://twitter.com/mdo">@mdo</a>). Let's look at how to implement the custom button we wrote for this site, <code>.btn-ttc</code>.</p>
  <p>The stock Bootstrap buttons require just one class, <code>.btn</code>, to start.  Here we extend the <code>.btn</code> style with a new modifier class, <code>.btn-ttc</code>, that we will create. This gives us a distinct custom look with minimal effort.</p>
  <p>Our customized button will be coded like this:</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;btn btn-ttc&quot;</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
</code></pre></div>
  <p>Note how <code>.btn-ttc</code> is added to the standard <code>.btn</code> class.</p>

  <p>To implement this, in the custom stylesheet, add the following CSS:</p>

<div class="highlight"><pre><code class="scss"><span class="cm">/* Custom button</span>
<span class="cm">-------------------------------------------------- */</span>

<span class="cm">/* Override base .btn styles */</span>
<span class="cm">/* Apply text and background changes to three key states: default, hover, and active (click). */</span>
<span class="nc">.btn-ttc</span><span class="o">,</span>
<span class="nc">.btn-ttc</span><span class="nd">:hover</span><span class="o">,</span>
<span class="nc">.btn-ttc</span><span class="nd">:active</span> <span class="p">{</span>
  <span class="na">color</span><span class="o">:</span> <span class="nb">white</span><span class="p">;</span>
  <span class="na">text-shadow</span><span class="o">:</span> <span class="mi">0</span> <span class="mi">-1</span><span class="kt">px</span> <span class="mi">0</span> <span class="nf">rgba</span><span class="p">(</span><span class="mi">0</span><span class="o">,</span> <span class="mi">0</span><span class="o">,</span> <span class="mi">0</span><span class="o">,</span> <span class="mi">0</span><span class="mf">.25</span><span class="p">);</span>
  <span class="na">background-color</span><span class="o">:</span> <span class="mh">#007da7</span><span class="p">;</span>
<span class="p">}</span>

<span class="cm">/* Apply the custom-colored gradients */</span>
<span class="cm">/* Note: you&#39;ll need to include all the appropriate gradients for various browsers and standards. */</span>
<span class="nc">.btn-ttc</span> <span class="p">{</span>
  <span class="na">background-repeat</span><span class="o">:</span> <span class="no">repeat-x</span><span class="p">;</span>
  <span class="na">background-image</span><span class="o">:</span> <span class="nf">linear-gradient</span><span class="p">(</span><span class="no">top</span><span class="o">,</span> <span class="mh">#009ED2</span> <span class="mi">0</span><span class="kt">%</span><span class="o">,</span> <span class="mh">#007DA7</span> <span class="mi">100</span><span class="kt">%</span><span class="p">);</span>
  <span class="nc">...</span>
<span class="p">}</span>

<span class="cm">/* Set the hover state */</span>
<span class="cm">/* An easy hover state is just to move the gradient up a small amount. Add other embellishments as you see fit. */</span>
<span class="nc">.btn-ttc</span><span class="nd">:hover</span> <span class="p">{</span>
  <span class="na">background-position</span><span class="o">:</span> <span class="mi">0</span> <span class="mi">-15</span><span class="kt">px</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div>

  <p>In short: Look to the style source and duplicate the selectors you need for your modifications.</p>
  <p><strong>In summary, here's the basic workflow:</strong></p>
  <ul>
    <li>For each element you want to customize, find its code in the compiled Bootstrap CSS.</li>
    <li>Copy the component's selector and styles and paste them in your custom stylesheet. For instance, to customize the navbar background, just copy the <code>.navbar</code> style specification.</li>
    <li>In your custom stylesheet, edit the CSS you just copied from the Bootstrap source. No need for prepending additional classes, or appending <code>!important</code> here.  Keep it simple.</li>
    <li>Rinse and repeat until you're happy with your customizations.</li>
  </ul>
  <p>Once you are comfortable performing light customizations, visual overhauls are just as straightforward. For a site like <a href="http://yourkarma.com">Karma</a>, which uses Bootstrap as a CSS reset with heavy modifications, more extensive work is involved.  But the same principle applies: include Bootstrap's default stylesheet first, then apply your custom stylesheet.</p>

  <div class="bs-callout bs-callout-info">
    <h4>Alternate customization methods</h4>
    <p>While not recommended for folks new to Bootstrap, you may use one of two alternate methods for customization. The first is modifying the source <code>.less</code> files (making upgrades super difficult), and the second is mapping source Less code to <a href="http://ruby.bvision.com/blog/please-stop-embedding-bootstrap-classes-in-your-html">your own classes via mixins</a>. For the time being, neither of those options are documented here.</p>
  </div>

  <h3>Removing potential bloat</h3>
  <p>Not all sites and applications need to make use of everything Bootstrap has to offer, especially in production environments where optimizing bandwidth is an issue. We encourage you to remove whatever is unused with our <a href="../customize/">Customizer</a>.</p>
  <p>Using the Customizer, simply uncheck any component, feature, or asset you don't need. Hit download and swap out the default Bootstrap files with these newly customized ones. You'll get vanilla Bootstrap, but without the features *you* deem unnecessary. All custom builds include compiled and minified versions, so use whichever works for you.</p>
</div>



<!-- Translations
================================================== -->
<div class="bs-docs-section">
  <h1 id="translations" class="page-header">Translations</h1>

  <p class="lead">Community members have translated Bootstrap's documentation into various languages. None are officially supported and they may not always be up to date.</p>
  <ul>
    <li><a href="http://v3.bootcss.com/">Bootstrap 中文文档 (Chinese)</a></li>
    <li><a href="http://www.oneskyapp.com/docs/bootstrap/fr">Bootstrap en Français (French)</a></li>
    <li><a href="http://holdirbootstrap.de/">Bootstrap auf Deutsch (German)</a></li>
    <li><a href="http://bootstrapk.com/BS3/">Bootstrap 한국어 (Korean)</a></li>
    <li><a href="http://www.oneskyapp.com/docs/bootstrap/ru">Bootstrap по-русски (Russian)</a></li>
    <li><a href="http://www.oneskyapp.com/docs/bootstrap/es">Bootstrap en Español (Spanish)</a></li>
    <li><a href="http://twbs.site-konstruktor.com.ua">Bootstrap ua Українською (Ukrainian)</a></li>
  </ul>
  <p>Have another language to add, or perhaps a different or better translation? Let us know by <a href="https://github.com/twbs/bootstrap/issues/new">opening an issue</a>.</p>
</div>

 </div>
 
 <div class="col-md-3">
       
          <div class="bs-docs-sidebar hidden-print" role="complementary">
            <ul class="nav bs-docs-sidenav">
              
                <li>
  <a href="#download">Download</a>
</li>
<li>
  <a href="#whats-included">What's included</a>
  <ul class="nav">
    <li><a href="#whats-included-precompiled">Precompiled</a></li>
    <li><a href="#whats-included-source">Source code</a></li>
  </ul>
</li>
<li>
  <a href="#template">Basic template</a>
</li>
<li>
  <a href="#examples">Examples</a>
  <ul class="nav">
    <li><a href="#examples-framework">Using the framework</a></li>
    <li><a href="#examples-navbars">Navbars in action</a></li>
    <li><a href="#examples-custom">Custom components</a></li>
    <li><a href="#examples-experiments">Experiments</a></li>
  </ul>
</li>
<li>
  <a href="#community">Community</a>
</li>
<li>
  <a href="#disable-responsive">Disabling responsiveness</a>
</li>
<li>
  <a href="#migration">Migrating from 2.x to 3.0</a>
</li>
<li>
  <a href="#support">Browser and device support</a>
  <ul class="nav">
    <li><a href="#support-browsers">Supported browsers</a></li>
    <li><a href="#support-ie8-ie9">Internet Explorer 8-9</a></li>
    <li><a href="#support-ie8-respondjs">IE8 and Respond.js</a></li>
    <li><a href="#support-ie8-box-sizing">IE8 and box-sizing</a></li>
    <li><a href="#support-ie-compatibility-modes">IE Compatibility modes</a></li>
    <li><a href="#support-ie10-width">IE10 and Windows (Phone) 8</a></li>
    <li><a href="#support-safari-percentages">Safari percent rounding</a></li>
    <li><a href="#support-fixed-position-keyboards">Modals, navbars, and virtual keyboards</a></li>
    <li><a href="#support-browser-zooming">Browser zooming</a></li>
    <li><a href="#support-printing">Printer viewports</a></li>
    <li><a href="#support-android-stock-browser">Android stock browser</a></li>
  </ul>
</li>
<li>
  <a href="#third-parties">Third party support</a>
</li>
<li>
  <a href="#accessibility">Accessibility</a>
</li>
<li>
  <a href="#license-faqs">License FAQs</a>
</li>
<li>
  <a href="#customizing">Customizing Bootstrap</a>
</li>
<li>
  <a href="#translations">Translations</a>
</li>

              
            </ul>
            <a class="back-to-top" href="#top">
              Back to top
            </a>
          </div>
        </div>
        
              
      </div>

    </div>