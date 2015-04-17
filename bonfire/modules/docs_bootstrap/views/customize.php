<!-- Docs page layout -->
    <div class="bs-docs-header" id="content">
      <div class="container">
        <h1>Customize and download</h1>
        <p>Customize Bootstrap's components, Less variables, and jQuery plugins to get your very own version.</p>
       
      </div>
    </div>

    <div class="container bs-docs-container">

      <div class="row">
        <div class="col-md-9" role="main">
          <!-- Customizer form -->
<form class="bs-customizer" role="form">
  <div class="bs-docs-section" id="less-section">
    <button class="btn btn-default toggle" type="button">Toggle all</button>
    <h1 id="less" class="page-header">Less files</h1>

    <p class="lead">Choose which Less files to compile into your custom build of Bootstrap. Not sure which files to use? Read through the <a href="../css/">CSS</a> and <a href="../components/">Components</a> pages in the docs.</p>

    <div class="row">
      <div class="col-xs-6 col-sm-4">
        <h3>Common CSS</h3>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="print.less">
            Print media styles
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="type.less">
            Typography
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="code.less">
            Code
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="grid.less">
            Grid system
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="tables.less">
            Tables
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="forms.less" data-dependents="navbar.less,input-groups.less">
            Forms
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="buttons.less" data-dependents="button-groups.less">
            Buttons
          </label>
        </div>
      </div><!-- .col-xs-6 .col-sm-4 -->

      <div class="col-xs-6 col-sm-4">
        <h3>Components</h3>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="glyphicons.less">
            Glyphicons
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="button-groups.less" data-dependencies="buttons.less">
            Button groups
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="input-groups.less" data-dependencies="forms.less">
            Input groups
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="navs.less" data-dependents="navbar.less">
            Navs
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="navbar.less" data-dependencies="forms.less,utilities.less,navs.less">
            Navbar
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="breadcrumbs.less">
            Breadcrumbs
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="pagination.less">
            Pagination
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="pager.less">
            Pager
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="labels.less">
            Labels
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="badges.less">
            Badges
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="jumbotron.less">
            Jumbotron
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="thumbnails.less">
            Thumbnails
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="alerts.less">
            Alerts
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="progress-bars.less">
            Progress bars
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="media.less">
            Media items
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="list-group.less">
            List groups
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="panels.less">
            Panels
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="wells.less">
            Wells
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="close.less">
            Close icon
          </label>
        </div>
      </div><!-- .col-xs-6 .col-sm-4 -->

      <div class="col-xs-6 col-sm-4">
        <h3>JavaScript components</h3>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="component-animations.less">
            Component animations (for JS)
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="dropdowns.less">
            Dropdowns
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="tooltip.less">
            Tooltips
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="popovers.less">
            Popovers
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="modals.less">
            Modals
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="carousel.less">
            Carousel
          </label>
        </div>

        <h3>Utilities</h3>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="utilities.less" data-dependents="navbar.less">
            Basic utilities
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="responsive-utilities.less">
            Responsive utilities
          </label>
        </div>
      </div><!-- .col-xs-6 .col-sm-4 -->
    </div><!-- /.row -->
  </div>



  <div class="bs-docs-section" id="plugin-section">
    <button class="btn btn-default toggle" type="button">Toggle all</button>
    <h1 id="plugins" class="page-header">jQuery plugins</h1>

    <p class="lead">Choose which jQuery plugins should be included in your custom JavaScript files. Unsure what to include? Read the <a href="../javascript/">JavaScript</a> page in the docs.</p>
    <div class="row">
      <div class="col-lg-6">
        <h4>Linked to components</h4>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="alert.js">
            Alert dismissal
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="button.js">
            Advanced buttons
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="carousel.js">
            Carousel functionality
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="dropdown.js">
            Dropdowns
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="modal.js">
            Modals
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="tooltip.js">
            Tooltips
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="popover.js" data-dependencies="tooltip.js">
            Popovers <small>(requires Tooltips)</small>
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="tab.js">
            Togglable tabs
          </label>
        </div>
      </div>
      <div class="col-lg-6">
        <h4>Magic</h4>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="affix.js">
            Affix
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="collapse.js">
            Collapse
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="scrollspy.js">
            Scrollspy
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" checked value="transition.js">
            Transitions <small>(required for any kind of animation)</small>
          </label>
        </div>
      </div>
    </div>

    <div class="bs-callout bs-callout-info">
      <h4>Produces two files</h4>
      <p>All checked plugins will be compiled into a readable <code>bootstrap.js</code> and a minified <code>bootstrap.min.js</code>. We recommend you use the minified version in production.</p>
    </div>

    <div class="bs-callout bs-callout-danger">
      <h4>jQuery required</h4>
      <p>All plugins require the latest version of <a href="http://jquery.com/" target="_blank">jQuery</a> to be included.</p>
    </div>
  </div>



  <div class="bs-docs-section" id="less-variables-section">
    <button class="btn btn-default toggle" type="button">Reset to defaults</button>
    <h1 id="less-variables" class="page-header">Less variables</h1>

    <p class="lead">Customize Less variables to define colors, sizes and more inside your custom CSS stylesheets.</p>
    
<!-- NOTE: DO NOT EDIT THE FOLLOWING SECTION DIRECTLY! It is autogenerated via the `build-customizer-html` Grunt task using the customizer-variables.jade template.-->
<h2 id="colors">Colors</h2>
<p>Gray and brand colors for use across Bootstrap.</p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@gray-darker">@gray-darker</label>
    <input id="input-@gray-darker" type="text" value="lighten(#000, 13.5%)" data-var="@gray-darker" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@gray-dark">@gray-dark</label>
    <input id="input-@gray-dark" type="text" value="lighten(#000, 20%)" data-var="@gray-dark" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@gray">@gray</label>
    <input id="input-@gray" type="text" value="lighten(#000, 33.5%)" data-var="@gray" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@gray-light">@gray-light</label>
    <input id="input-@gray-light" type="text" value="lighten(#000, 60%)" data-var="@gray-light" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@gray-lighter">@gray-lighter</label>
    <input id="input-@gray-lighter" type="text" value="lighten(#000, 93.5%)" data-var="@gray-lighter" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@brand-primary">@brand-primary</label>
    <input id="input-@brand-primary" type="text" value="#428bca" data-var="@brand-primary" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@brand-success">@brand-success</label>
    <input id="input-@brand-success" type="text" value="#5cb85c" data-var="@brand-success" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@brand-info">@brand-info</label>
    <input id="input-@brand-info" type="text" value="#5bc0de" data-var="@brand-info" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@brand-warning">@brand-warning</label>
    <input id="input-@brand-warning" type="text" value="#f0ad4e" data-var="@brand-warning" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@brand-danger">@brand-danger</label>
    <input id="input-@brand-danger" type="text" value="#d9534f" data-var="@brand-danger" class="form-control"/>
  </div>
</div>
<h2 id="scaffolding">Scaffolding</h2>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@body-bg">@body-bg</label>
    <input id="input-@body-bg" type="text" value="#fff" data-var="@body-bg" class="form-control"/>
    <p class="help-block">Background color for <code>&lt;body&gt;</code>.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@text-color">@text-color</label>
    <input id="input-@text-color" type="text" value="@gray-dark" data-var="@text-color" class="form-control"/>
    <p class="help-block">Global text color on <code>&lt;body&gt;</code>.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@link-color">@link-color</label>
    <input id="input-@link-color" type="text" value="@brand-primary" data-var="@link-color" class="form-control"/>
    <p class="help-block">Global textual link color.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@link-hover-color">@link-hover-color</label>
    <input id="input-@link-hover-color" type="text" value="darken(@link-color, 15%)" data-var="@link-hover-color" class="form-control"/>
    <p class="help-block">Link hover color set via <code>darken()</code> function.</p>
  </div>
</div>
<h2 id="typography">Typography</h2>
<p>Font, line-height, and color for body text, headings, and more.</p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@font-family-sans-serif">@font-family-sans-serif</label>
    <input id="input-@font-family-sans-serif" type="text" value="&quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif" data-var="@font-family-sans-serif" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@font-family-serif">@font-family-serif</label>
    <input id="input-@font-family-serif" type="text" value="Georgia, &quot;Times New Roman&quot;, Times, serif" data-var="@font-family-serif" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@font-family-monospace">@font-family-monospace</label>
    <input id="input-@font-family-monospace" type="text" value="Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace" data-var="@font-family-monospace" class="form-control"/>
    <p class="help-block">Default monospace fonts for <code>&lt;code&gt;</code>, <code>&lt;kbd&gt;</code>, and <code>&lt;pre&gt;</code>.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@font-family-base">@font-family-base</label>
    <input id="input-@font-family-base" type="text" value="@font-family-sans-serif" data-var="@font-family-base" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@font-size-base">@font-size-base</label>
    <input id="input-@font-size-base" type="text" value="14px" data-var="@font-size-base" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@font-size-large">@font-size-large</label>
    <input id="input-@font-size-large" type="text" value="ceil((@font-size-base * 1.25))" data-var="@font-size-large" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@font-size-small">@font-size-small</label>
    <input id="input-@font-size-small" type="text" value="ceil((@font-size-base * 0.85))" data-var="@font-size-small" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@font-size-h1">@font-size-h1</label>
    <input id="input-@font-size-h1" type="text" value="floor((@font-size-base * 2.6))" data-var="@font-size-h1" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@font-size-h2">@font-size-h2</label>
    <input id="input-@font-size-h2" type="text" value="floor((@font-size-base * 2.15))" data-var="@font-size-h2" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@font-size-h3">@font-size-h3</label>
    <input id="input-@font-size-h3" type="text" value="ceil((@font-size-base * 1.7))" data-var="@font-size-h3" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@font-size-h4">@font-size-h4</label>
    <input id="input-@font-size-h4" type="text" value="ceil((@font-size-base * 1.25))" data-var="@font-size-h4" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@font-size-h5">@font-size-h5</label>
    <input id="input-@font-size-h5" type="text" value="@font-size-base" data-var="@font-size-h5" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@font-size-h6">@font-size-h6</label>
    <input id="input-@font-size-h6" type="text" value="ceil((@font-size-base * 0.85))" data-var="@font-size-h6" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@line-height-base">@line-height-base</label>
    <input id="input-@line-height-base" type="text" value="1.428571429" data-var="@line-height-base" class="form-control"/>
    <p class="help-block">Unit-less <code>line-height</code> for use in components like buttons.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@line-height-computed">@line-height-computed</label>
    <input id="input-@line-height-computed" type="text" value="floor((@font-size-base * @line-height-base))" data-var="@line-height-computed" class="form-control"/>
    <p class="help-block">Computed &quot;line-height&quot; (<code>font-size</code> * <code>line-height</code>) for use with <code>margin</code>, <code>padding</code>, etc.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@headings-font-family">@headings-font-family</label>
    <input id="input-@headings-font-family" type="text" value="inherit" data-var="@headings-font-family" class="form-control"/>
    <p class="help-block">By default, this inherits from the <code>&lt;body&gt;</code>.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@headings-font-weight">@headings-font-weight</label>
    <input id="input-@headings-font-weight" type="text" value="500" data-var="@headings-font-weight" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@headings-line-height">@headings-line-height</label>
    <input id="input-@headings-line-height" type="text" value="1.1" data-var="@headings-line-height" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@headings-color">@headings-color</label>
    <input id="input-@headings-color" type="text" value="inherit" data-var="@headings-color" class="form-control"/>
  </div>
</div>
<h2 id="components">Components</h2>
<p>Define common padding and border radius sizes and more. Values based on 14px text and 1.428 line-height (~20px to start).</p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@padding-base-vertical">@padding-base-vertical</label>
    <input id="input-@padding-base-vertical" type="text" value="6px" data-var="@padding-base-vertical" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@padding-base-horizontal">@padding-base-horizontal</label>
    <input id="input-@padding-base-horizontal" type="text" value="12px" data-var="@padding-base-horizontal" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@padding-large-vertical">@padding-large-vertical</label>
    <input id="input-@padding-large-vertical" type="text" value="10px" data-var="@padding-large-vertical" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@padding-large-horizontal">@padding-large-horizontal</label>
    <input id="input-@padding-large-horizontal" type="text" value="16px" data-var="@padding-large-horizontal" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@padding-small-vertical">@padding-small-vertical</label>
    <input id="input-@padding-small-vertical" type="text" value="5px" data-var="@padding-small-vertical" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@padding-small-horizontal">@padding-small-horizontal</label>
    <input id="input-@padding-small-horizontal" type="text" value="10px" data-var="@padding-small-horizontal" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@padding-xs-vertical">@padding-xs-vertical</label>
    <input id="input-@padding-xs-vertical" type="text" value="1px" data-var="@padding-xs-vertical" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@padding-xs-horizontal">@padding-xs-horizontal</label>
    <input id="input-@padding-xs-horizontal" type="text" value="5px" data-var="@padding-xs-horizontal" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@line-height-large">@line-height-large</label>
    <input id="input-@line-height-large" type="text" value="1.33" data-var="@line-height-large" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@line-height-small">@line-height-small</label>
    <input id="input-@line-height-small" type="text" value="1.5" data-var="@line-height-small" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@border-radius-base">@border-radius-base</label>
    <input id="input-@border-radius-base" type="text" value="4px" data-var="@border-radius-base" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@border-radius-large">@border-radius-large</label>
    <input id="input-@border-radius-large" type="text" value="6px" data-var="@border-radius-large" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@border-radius-small">@border-radius-small</label>
    <input id="input-@border-radius-small" type="text" value="3px" data-var="@border-radius-small" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@component-active-color">@component-active-color</label>
    <input id="input-@component-active-color" type="text" value="#fff" data-var="@component-active-color" class="form-control"/>
    <p class="help-block">Global color for active items (e.g., navs or dropdowns).</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@component-active-bg">@component-active-bg</label>
    <input id="input-@component-active-bg" type="text" value="@brand-primary" data-var="@component-active-bg" class="form-control"/>
    <p class="help-block">Global background color for active items (e.g., navs or dropdowns).</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@caret-width-base">@caret-width-base</label>
    <input id="input-@caret-width-base" type="text" value="4px" data-var="@caret-width-base" class="form-control"/>
    <p class="help-block">Width of the <code>border</code> for generating carets that indicator dropdowns.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@caret-width-large">@caret-width-large</label>
    <input id="input-@caret-width-large" type="text" value="5px" data-var="@caret-width-large" class="form-control"/>
    <p class="help-block">Carets increase slightly in size for larger components.</p>
  </div>
</div>
<h2 id="tables">Tables</h2>
<p>Customizes the <code>.table</code> component with basic values, each used across all table variations.</p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@table-cell-padding">@table-cell-padding</label>
    <input id="input-@table-cell-padding" type="text" value="8px" data-var="@table-cell-padding" class="form-control"/>
    <p class="help-block">Padding for <code>&lt;th&gt;</code>s and <code>&lt;td&gt;</code>s.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@table-condensed-cell-padding">@table-condensed-cell-padding</label>
    <input id="input-@table-condensed-cell-padding" type="text" value="5px" data-var="@table-condensed-cell-padding" class="form-control"/>
    <p class="help-block">Padding for cells in <code>.table-condensed</code>.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@table-bg">@table-bg</label>
    <input id="input-@table-bg" type="text" value="transparent" data-var="@table-bg" class="form-control"/>
    <p class="help-block">Default background color used for all tables.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@table-bg-accent">@table-bg-accent</label>
    <input id="input-@table-bg-accent" type="text" value="#f9f9f9" data-var="@table-bg-accent" class="form-control"/>
    <p class="help-block">Background color used for <code>.table-striped</code>.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@table-bg-hover">@table-bg-hover</label>
    <input id="input-@table-bg-hover" type="text" value="#f5f5f5" data-var="@table-bg-hover" class="form-control"/>
    <p class="help-block">Background color used for <code>.table-hover</code>.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@table-bg-active">@table-bg-active</label>
    <input id="input-@table-bg-active" type="text" value="@table-bg-hover" data-var="@table-bg-active" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@table-border-color">@table-border-color</label>
    <input id="input-@table-border-color" type="text" value="#ddd" data-var="@table-border-color" class="form-control"/>
    <p class="help-block">Border color for table and cell borders.</p>
  </div>
</div>
<h2 id="buttons">Buttons</h2>
<p>For each of Bootstrap&#39;s buttons, define text, background and border color.</p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@btn-font-weight">@btn-font-weight</label>
    <input id="input-@btn-font-weight" type="text" value="normal" data-var="@btn-font-weight" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-default-color">@btn-default-color</label>
    <input id="input-@btn-default-color" type="text" value="#333" data-var="@btn-default-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">

    <label for="input-@btn-default-bg">@btn-default-bg</label>
    <input id="input-@btn-default-bg" type="text" value="#fff" data-var="@btn-default-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-default-border">@btn-default-border</label>
    <input id="input-@btn-default-border" type="text" value="#ccc" data-var="@btn-default-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-primary-color">@btn-primary-color</label>
    <input id="input-@btn-primary-color" type="text" value="#fff" data-var="@btn-primary-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-primary-bg">@btn-primary-bg</label>
    <input id="input-@btn-primary-bg" type="text" value="@brand-primary" data-var="@btn-primary-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-primary-border">@btn-primary-border</label>
    <input id="input-@btn-primary-border" type="text" value="darken(@btn-primary-bg, 5%)" data-var="@btn-primary-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-success-color">@btn-success-color</label>
    <input id="input-@btn-success-color" type="text" value="#fff" data-var="@btn-success-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-success-bg">@btn-success-bg</label>
    <input id="input-@btn-success-bg" type="text" value="@brand-success" data-var="@btn-success-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-success-border">@btn-success-border</label>
    <input id="input-@btn-success-border" type="text" value="darken(@btn-success-bg, 5%)" data-var="@btn-success-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-info-color">@btn-info-color</label>
    <input id="input-@btn-info-color" type="text" value="#fff" data-var="@btn-info-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-info-bg">@btn-info-bg</label>
    <input id="input-@btn-info-bg" type="text" value="@brand-info" data-var="@btn-info-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-info-border">@btn-info-border</label>
    <input id="input-@btn-info-border" type="text" value="darken(@btn-info-bg, 5%)" data-var="@btn-info-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-warning-color">@btn-warning-color</label>
    <input id="input-@btn-warning-color" type="text" value="#fff" data-var="@btn-warning-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-warning-bg">@btn-warning-bg</label>
    <input id="input-@btn-warning-bg" type="text" value="@brand-warning" data-var="@btn-warning-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-warning-border">@btn-warning-border</label>
    <input id="input-@btn-warning-border" type="text" value="darken(@btn-warning-bg, 5%)" data-var="@btn-warning-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-danger-color">@btn-danger-color</label>
    <input id="input-@btn-danger-color" type="text" value="#fff" data-var="@btn-danger-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-danger-bg">@btn-danger-bg</label>
    <input id="input-@btn-danger-bg" type="text" value="@brand-danger" data-var="@btn-danger-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-danger-border">@btn-danger-border</label>
    <input id="input-@btn-danger-border" type="text" value="darken(@btn-danger-bg, 5%)" data-var="@btn-danger-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@btn-link-disabled-color">@btn-link-disabled-color</label>
    <input id="input-@btn-link-disabled-color" type="text" value="@gray-light" data-var="@btn-link-disabled-color" class="form-control"/>
  </div>
</div>
<h2 id="forms">Forms</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@input-bg">@input-bg</label>
    <input id="input-@input-bg" type="text" value="#fff" data-var="@input-bg" class="form-control"/>
    <p class="help-block"><code>&lt;input&gt;</code> background color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@input-bg-disabled">@input-bg-disabled</label>
    <input id="input-@input-bg-disabled" type="text" value="@gray-lighter" data-var="@input-bg-disabled" class="form-control"/>
    <p class="help-block"><code>&lt;input disabled&gt;</code> background color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@input-color">@input-color</label>
    <input id="input-@input-color" type="text" value="@gray" data-var="@input-color" class="form-control"/>
    <p class="help-block">Text color for <code>&lt;input&gt;</code>s</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@input-border">@input-border</label>
    <input id="input-@input-border" type="text" value="#ccc" data-var="@input-border" class="form-control"/>
    <p class="help-block"><code>&lt;input&gt;</code> border color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@input-border-radius">@input-border-radius</label>
    <input id="input-@input-border-radius" type="text" value="@border-radius-base" data-var="@input-border-radius" class="form-control"/>
    <p class="help-block"><code>&lt;input&gt;</code> border radius</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@input-border-focus">@input-border-focus</label>
    <input id="input-@input-border-focus" type="text" value="#66afe9" data-var="@input-border-focus" class="form-control"/>
    <p class="help-block">Border color for inputs on focus</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@input-color-placeholder">@input-color-placeholder</label>
    <input id="input-@input-color-placeholder" type="text" value="@gray-light" data-var="@input-color-placeholder" class="form-control"/>
    <p class="help-block">Placeholder text color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@input-height-base">@input-height-base</label>
    <input id="input-@input-height-base" type="text" value="(@line-height-computed + (@padding-base-vertical * 2) + 2)" data-var="@input-height-base" class="form-control"/>
    <p class="help-block">Default <code>.form-control</code> height</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@input-height-large">@input-height-large</label>
    <input id="input-@input-height-large" type="text" value="(ceil(@font-size-large * @line-height-large) + (@padding-large-vertical * 2) + 2)" data-var="@input-height-large" class="form-control"/>
    <p class="help-block">Large <code>.form-control</code> height</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@input-height-small">@input-height-small</label>
    <input id="input-@input-height-small" type="text" value="(floor(@font-size-small * @line-height-small) + (@padding-small-vertical * 2) + 2)" data-var="@input-height-small" class="form-control"/>
    <p class="help-block">Small <code>.form-control</code> height</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@legend-color">@legend-color</label>
    <input id="input-@legend-color" type="text" value="@gray-dark" data-var="@legend-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@legend-border-color">@legend-border-color</label>
    <input id="input-@legend-border-color" type="text" value="#e5e5e5" data-var="@legend-border-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@input-group-addon-bg">@input-group-addon-bg</label>
    <input id="input-@input-group-addon-bg" type="text" value="@gray-lighter" data-var="@input-group-addon-bg" class="form-control"/>
    <p class="help-block">Background color for textual input addons</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@input-group-addon-border-color">@input-group-addon-border-color</label>
    <input id="input-@input-group-addon-border-color" type="text" value="@input-border" data-var="@input-group-addon-border-color" class="form-control"/>
    <p class="help-block">Border color for textual input addons</p>
  </div>
</div>
<h2 id="dropdowns">Dropdowns</h2>
<p>Dropdown menu container and contents.</p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@dropdown-bg">@dropdown-bg</label>
    <input id="input-@dropdown-bg" type="text" value="#fff" data-var="@dropdown-bg" class="form-control"/>
    <p class="help-block">Background for the dropdown menu.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@dropdown-border">@dropdown-border</label>
    <input id="input-@dropdown-border" type="text" value="rgba(0,0,0,.15)" data-var="@dropdown-border" class="form-control"/>
    <p class="help-block">Dropdown menu <code>border-color</code>.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@dropdown-fallback-border">@dropdown-fallback-border</label>
    <input id="input-@dropdown-fallback-border" type="text" value="#ccc" data-var="@dropdown-fallback-border" class="form-control"/>
    <p class="help-block">Dropdown menu <code>border-color</code> <strong>for IE8</strong>.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@dropdown-divider-bg">@dropdown-divider-bg</label>
    <input id="input-@dropdown-divider-bg" type="text" value="#e5e5e5" data-var="@dropdown-divider-bg" class="form-control"/>
    <p class="help-block">Divider color for between dropdown items.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@dropdown-link-color">@dropdown-link-color</label>
    <input id="input-@dropdown-link-color" type="text" value="@gray-dark" data-var="@dropdown-link-color" class="form-control"/>
    <p class="help-block">Dropdown link text color.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@dropdown-link-hover-color">@dropdown-link-hover-color</label>
    <input id="input-@dropdown-link-hover-color" type="text" value="darken(@gray-dark, 5%)" data-var="@dropdown-link-hover-color" class="form-control"/>
    <p class="help-block">Hover color for dropdown links.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@dropdown-link-hover-bg">@dropdown-link-hover-bg</label>
    <input id="input-@dropdown-link-hover-bg" type="text" value="#f5f5f5" data-var="@dropdown-link-hover-bg" class="form-control"/>
    <p class="help-block">Hover background for dropdown links.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@dropdown-link-active-color">@dropdown-link-active-color</label>
    <input id="input-@dropdown-link-active-color" type="text" value="@component-active-color" data-var="@dropdown-link-active-color" class="form-control"/>
    <p class="help-block">Active dropdown menu item text color.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@dropdown-link-active-bg">@dropdown-link-active-bg</label>
    <input id="input-@dropdown-link-active-bg" type="text" value="@component-active-bg" data-var="@dropdown-link-active-bg" class="form-control"/>
    <p class="help-block">Active dropdown menu item background color.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@dropdown-link-disabled-color">@dropdown-link-disabled-color</label>
    <input id="input-@dropdown-link-disabled-color" type="text" value="@gray-light" data-var="@dropdown-link-disabled-color" class="form-control"/>
    <p class="help-block">Disabled dropdown menu item background color.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@dropdown-header-color">@dropdown-header-color</label>
    <input id="input-@dropdown-header-color" type="text" value="@gray-light" data-var="@dropdown-header-color" class="form-control"/>
    <p class="help-block">Text color for headers within dropdown menus.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@dropdown-caret-color">@dropdown-caret-color</label>
    <input id="input-@dropdown-caret-color" type="text" value="#000" data-var="@dropdown-caret-color" class="form-control"/>
  </div>
</div>
<h2 id="media-queries-breakpoints">Media queries breakpoints</h2>
<p>Define the breakpoints at which your layout will change, adapting to different screen sizes.</p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@screen-xs">@screen-xs</label>
    <input id="input-@screen-xs" type="text" value="480px" data-var="@screen-xs" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@screen-xs-min">@screen-xs-min</label>
    <input id="input-@screen-xs-min" type="text" value="@screen-xs" data-var="@screen-xs-min" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@screen-phone">@screen-phone</label>
    <input id="input-@screen-phone" type="text" value="@screen-xs-min" data-var="@screen-phone" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@screen-sm">@screen-sm</label>
    <input id="input-@screen-sm" type="text" value="768px" data-var="@screen-sm" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@screen-sm-min">@screen-sm-min</label>
    <input id="input-@screen-sm-min" type="text" value="@screen-sm" data-var="@screen-sm-min" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@screen-tablet">@screen-tablet</label>
    <input id="input-@screen-tablet" type="text" value="@screen-sm-min" data-var="@screen-tablet" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@screen-md">@screen-md</label>
    <input id="input-@screen-md" type="text" value="992px" data-var="@screen-md" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@screen-md-min">@screen-md-min</label>
    <input id="input-@screen-md-min" type="text" value="@screen-md" data-var="@screen-md-min" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@screen-desktop">@screen-desktop</label>
    <input id="input-@screen-desktop" type="text" value="@screen-md-min" data-var="@screen-desktop" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@screen-lg">@screen-lg</label>
    <input id="input-@screen-lg" type="text" value="1200px" data-var="@screen-lg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@screen-lg-min">@screen-lg-min</label>
    <input id="input-@screen-lg-min" type="text" value="@screen-lg" data-var="@screen-lg-min" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@screen-lg-desktop">@screen-lg-desktop</label>
    <input id="input-@screen-lg-desktop" type="text" value="@screen-lg-min" data-var="@screen-lg-desktop" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@screen-xs-max">@screen-xs-max</label>
    <input id="input-@screen-xs-max" type="text" value="(@screen-sm-min - 1)" data-var="@screen-xs-max" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@screen-sm-max">@screen-sm-max</label>
    <input id="input-@screen-sm-max" type="text" value="(@screen-md-min - 1)" data-var="@screen-sm-max" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@screen-md-max">@screen-md-max</label>
    <input id="input-@screen-md-max" type="text" value="(@screen-lg-min - 1)" data-var="@screen-md-max" class="form-control"/>
  </div>
</div>
<h2 id="grid-system">Grid system</h2>
<p>Define your custom responsive grid.</p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@grid-columns">@grid-columns</label>
    <input id="input-@grid-columns" type="text" value="12" data-var="@grid-columns" class="form-control"/>
    <p class="help-block">Number of columns in the grid.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@grid-gutter-width">@grid-gutter-width</label>
    <input id="input-@grid-gutter-width" type="text" value="30px" data-var="@grid-gutter-width" class="form-control"/>
    <p class="help-block">Padding between columns. Gets divided in half for the left and right.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@grid-float-breakpoint">@grid-float-breakpoint</label>
    <input id="input-@grid-float-breakpoint" type="text" value="@screen-sm-min" data-var="@grid-float-breakpoint" class="form-control"/>
    <p class="help-block">Point at which the navbar becomes uncollapsed.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@grid-float-breakpoint-max">@grid-float-breakpoint-max</label>
    <input id="input-@grid-float-breakpoint-max" type="text" value="(@grid-float-breakpoint - 1)" data-var="@grid-float-breakpoint-max" class="form-control"/>
    <p class="help-block">Point at which the navbar begins collapsing.</p>
  </div>
</div>
<h2 id="container-sizes">Container sizes</h2>
<p>Define the maximum width of <code>.container</code> for different screen sizes.</p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@container-tablet">@container-tablet</label>
    <input id="input-@container-tablet" type="text" value="((720px + @grid-gutter-width))" data-var="@container-tablet" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@container-sm">@container-sm</label>
    <input id="input-@container-sm" type="text" value="@container-tablet" data-var="@container-sm" class="form-control"/>
    <p class="help-block">For <code>@screen-sm-min</code> and up.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@container-desktop">@container-desktop</label>
    <input id="input-@container-desktop" type="text" value="((940px + @grid-gutter-width))" data-var="@container-desktop" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@container-md">@container-md</label>
    <input id="input-@container-md" type="text" value="@container-desktop" data-var="@container-md" class="form-control"/>
    <p class="help-block">For <code>@screen-md-min</code> and up.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@container-large-desktop">@container-large-desktop</label>
    <input id="input-@container-large-desktop" type="text" value="((1140px + @grid-gutter-width))" data-var="@container-large-desktop" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@container-lg">@container-lg</label>
    <input id="input-@container-lg" type="text" value="@container-large-desktop" data-var="@container-lg" class="form-control"/>
    <p class="help-block">For <code>@screen-lg-min</code> and up.</p>
  </div>
</div>
<h2 id="navbar">Navbar</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@navbar-height">@navbar-height</label>
    <input id="input-@navbar-height" type="text" value="50px" data-var="@navbar-height" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-margin-bottom">@navbar-margin-bottom</label>
    <input id="input-@navbar-margin-bottom" type="text" value="@line-height-computed" data-var="@navbar-margin-bottom" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-border-radius">@navbar-border-radius</label>
    <input id="input-@navbar-border-radius" type="text" value="@border-radius-base" data-var="@navbar-border-radius" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-padding-horizontal">@navbar-padding-horizontal</label>
    <input id="input-@navbar-padding-horizontal" type="text" value="floor((@grid-gutter-width / 2))" data-var="@navbar-padding-horizontal" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-padding-vertical">@navbar-padding-vertical</label>
    <input id="input-@navbar-padding-vertical" type="text" value="((@navbar-height - @line-height-computed) / 2)" data-var="@navbar-padding-vertical" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-collapse-max-height">@navbar-collapse-max-height</label>
    <input id="input-@navbar-collapse-max-height" type="text" value="340px" data-var="@navbar-collapse-max-height" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-default-color">@navbar-default-color</label>
    <input id="input-@navbar-default-color" type="text" value="#777" data-var="@navbar-default-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-default-bg">@navbar-default-bg</label>
    <input id="input-@navbar-default-bg" type="text" value="#f8f8f8" data-var="@navbar-default-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-default-border">@navbar-default-border</label>
    <input id="input-@navbar-default-border" type="text" value="darken(@navbar-default-bg, 6.5%)" data-var="@navbar-default-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-default-link-color">@navbar-default-link-color</label>
    <input id="input-@navbar-default-link-color" type="text" value="#777" data-var="@navbar-default-link-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-default-link-hover-color">@navbar-default-link-hover-color</label>
    <input id="input-@navbar-default-link-hover-color" type="text" value="#333" data-var="@navbar-default-link-hover-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-default-link-hover-bg">@navbar-default-link-hover-bg</label>
    <input id="input-@navbar-default-link-hover-bg" type="text" value="transparent" data-var="@navbar-default-link-hover-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-default-link-active-color">@navbar-default-link-active-color</label>
    <input id="input-@navbar-default-link-active-color" type="text" value="#555" data-var="@navbar-default-link-active-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-default-link-active-bg">@navbar-default-link-active-bg</label>
    <input id="input-@navbar-default-link-active-bg" type="text" value="darken(@navbar-default-bg, 6.5%)" data-var="@navbar-default-link-active-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-default-link-disabled-color">@navbar-default-link-disabled-color</label>
    <input id="input-@navbar-default-link-disabled-color" type="text" value="#ccc" data-var="@navbar-default-link-disabled-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-default-link-disabled-bg">@navbar-default-link-disabled-bg</label>
    <input id="input-@navbar-default-link-disabled-bg" type="text" value="transparent" data-var="@navbar-default-link-disabled-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-default-brand-color">@navbar-default-brand-color</label>
    <input id="input-@navbar-default-brand-color" type="text" value="@navbar-default-link-color" data-var="@navbar-default-brand-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-default-brand-hover-color">@navbar-default-brand-hover-color</label>
    <input id="input-@navbar-default-brand-hover-color" type="text" value="darken(@navbar-default-brand-color, 10%)" data-var="@navbar-default-brand-hover-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-default-brand-hover-bg">@navbar-default-brand-hover-bg</label>
    <input id="input-@navbar-default-brand-hover-bg" type="text" value="transparent" data-var="@navbar-default-brand-hover-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-default-toggle-hover-bg">@navbar-default-toggle-hover-bg</label>
    <input id="input-@navbar-default-toggle-hover-bg" type="text" value="#ddd" data-var="@navbar-default-toggle-hover-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-default-toggle-icon-bar-bg">@navbar-default-toggle-icon-bar-bg</label>
    <input id="input-@navbar-default-toggle-icon-bar-bg" type="text" value="#888" data-var="@navbar-default-toggle-icon-bar-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-default-toggle-border-color">@navbar-default-toggle-border-color</label>
    <input id="input-@navbar-default-toggle-border-color" type="text" value="#ddd" data-var="@navbar-default-toggle-border-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-inverse-color">@navbar-inverse-color</label>
    <input id="input-@navbar-inverse-color" type="text" value="@gray-light" data-var="@navbar-inverse-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-inverse-bg">@navbar-inverse-bg</label>
    <input id="input-@navbar-inverse-bg" type="text" value="#222" data-var="@navbar-inverse-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-inverse-border">@navbar-inverse-border</label>
    <input id="input-@navbar-inverse-border" type="text" value="darken(@navbar-inverse-bg, 10%)" data-var="@navbar-inverse-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-inverse-link-color">@navbar-inverse-link-color</label>
    <input id="input-@navbar-inverse-link-color" type="text" value="@gray-light" data-var="@navbar-inverse-link-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-inverse-link-hover-color">@navbar-inverse-link-hover-color</label>
    <input id="input-@navbar-inverse-link-hover-color" type="text" value="#fff" data-var="@navbar-inverse-link-hover-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-inverse-link-hover-bg">@navbar-inverse-link-hover-bg</label>
    <input id="input-@navbar-inverse-link-hover-bg" type="text" value="transparent" data-var="@navbar-inverse-link-hover-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-inverse-link-active-color">@navbar-inverse-link-active-color</label>
    <input id="input-@navbar-inverse-link-active-color" type="text" value="@navbar-inverse-link-hover-color" data-var="@navbar-inverse-link-active-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-inverse-link-active-bg">@navbar-inverse-link-active-bg</label>
    <input id="input-@navbar-inverse-link-active-bg" type="text" value="darken(@navbar-inverse-bg, 10%)" data-var="@navbar-inverse-link-active-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-inverse-link-disabled-color">@navbar-inverse-link-disabled-color</label>
    <input id="input-@navbar-inverse-link-disabled-color" type="text" value="#444" data-var="@navbar-inverse-link-disabled-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-inverse-link-disabled-bg">@navbar-inverse-link-disabled-bg</label>
    <input id="input-@navbar-inverse-link-disabled-bg" type="text" value="transparent" data-var="@navbar-inverse-link-disabled-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-inverse-brand-color">@navbar-inverse-brand-color</label>
    <input id="input-@navbar-inverse-brand-color" type="text" value="@navbar-inverse-link-color" data-var="@navbar-inverse-brand-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-inverse-brand-hover-color">@navbar-inverse-brand-hover-color</label>
    <input id="input-@navbar-inverse-brand-hover-color" type="text" value="#fff" data-var="@navbar-inverse-brand-hover-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-inverse-brand-hover-bg">@navbar-inverse-brand-hover-bg</label>
    <input id="input-@navbar-inverse-brand-hover-bg" type="text" value="transparent" data-var="@navbar-inverse-brand-hover-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-inverse-toggle-hover-bg">@navbar-inverse-toggle-hover-bg</label>
    <input id="input-@navbar-inverse-toggle-hover-bg" type="text" value="#333" data-var="@navbar-inverse-toggle-hover-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-inverse-toggle-icon-bar-bg">@navbar-inverse-toggle-icon-bar-bg</label>
    <input id="input-@navbar-inverse-toggle-icon-bar-bg" type="text" value="#fff" data-var="@navbar-inverse-toggle-icon-bar-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@navbar-inverse-toggle-border-color">@navbar-inverse-toggle-border-color</label>
    <input id="input-@navbar-inverse-toggle-border-color" type="text" value="#333" data-var="@navbar-inverse-toggle-border-color" class="form-control"/>
  </div>
</div>
<h2 id="navs">Navs</h2>
<p></p>
<h3 id="shared-nav-styles">Shared nav styles</h3>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@nav-link-padding">@nav-link-padding</label>
    <input id="input-@nav-link-padding" type="text" value="10px 15px" data-var="@nav-link-padding" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@nav-link-hover-bg">@nav-link-hover-bg</label>
    <input id="input-@nav-link-hover-bg" type="text" value="@gray-lighter" data-var="@nav-link-hover-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@nav-disabled-link-color">@nav-disabled-link-color</label>
    <input id="input-@nav-disabled-link-color" type="text" value="@gray-light" data-var="@nav-disabled-link-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@nav-disabled-link-hover-color">@nav-disabled-link-hover-color</label>
    <input id="input-@nav-disabled-link-hover-color" type="text" value="@gray-light" data-var="@nav-disabled-link-hover-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@nav-open-link-hover-color">@nav-open-link-hover-color</label>
    <input id="input-@nav-open-link-hover-color" type="text" value="#fff" data-var="@nav-open-link-hover-color" class="form-control"/>
  </div>
</div>
<h2 id="tabs">Tabs</h2>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@nav-tabs-border-color">@nav-tabs-border-color</label>
    <input id="input-@nav-tabs-border-color" type="text" value="#ddd" data-var="@nav-tabs-border-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@nav-tabs-link-hover-border-color">@nav-tabs-link-hover-border-color</label>
    <input id="input-@nav-tabs-link-hover-border-color" type="text" value="@gray-lighter" data-var="@nav-tabs-link-hover-border-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@nav-tabs-active-link-hover-bg">@nav-tabs-active-link-hover-bg</label>
    <input id="input-@nav-tabs-active-link-hover-bg" type="text" value="@body-bg" data-var="@nav-tabs-active-link-hover-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@nav-tabs-active-link-hover-color">@nav-tabs-active-link-hover-color</label>
    <input id="input-@nav-tabs-active-link-hover-color" type="text" value="@gray" data-var="@nav-tabs-active-link-hover-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@nav-tabs-active-link-hover-border-color">@nav-tabs-active-link-hover-border-color</label>
    <input id="input-@nav-tabs-active-link-hover-border-color" type="text" value="#ddd" data-var="@nav-tabs-active-link-hover-border-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@nav-tabs-justified-link-border-color">@nav-tabs-justified-link-border-color</label>
    <input id="input-@nav-tabs-justified-link-border-color" type="text" value="#ddd" data-var="@nav-tabs-justified-link-border-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@nav-tabs-justified-active-link-border-color">@nav-tabs-justified-active-link-border-color</label>
    <input id="input-@nav-tabs-justified-active-link-border-color" type="text" value="@body-bg" data-var="@nav-tabs-justified-active-link-border-color" class="form-control"/>
  </div>
</div>
<h2 id="pills">Pills</h2>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@nav-pills-border-radius">@nav-pills-border-radius</label>
    <input id="input-@nav-pills-border-radius" type="text" value="@border-radius-base" data-var="@nav-pills-border-radius" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@nav-pills-active-link-hover-bg">@nav-pills-active-link-hover-bg</label>
    <input id="input-@nav-pills-active-link-hover-bg" type="text" value="@component-active-bg" data-var="@nav-pills-active-link-hover-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@nav-pills-active-link-hover-color">@nav-pills-active-link-hover-color</label>
    <input id="input-@nav-pills-active-link-hover-color" type="text" value="@component-active-color" data-var="@nav-pills-active-link-hover-color" class="form-control"/>
  </div>
</div>
<h2 id="pagination">Pagination</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@pagination-color">@pagination-color</label>
    <input id="input-@pagination-color" type="text" value="@link-color" data-var="@pagination-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pagination-bg">@pagination-bg</label>
    <input id="input-@pagination-bg" type="text" value="#fff" data-var="@pagination-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pagination-border">@pagination-border</label>
    <input id="input-@pagination-border" type="text" value="#ddd" data-var="@pagination-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pagination-hover-color">@pagination-hover-color</label>
    <input id="input-@pagination-hover-color" type="text" value="@link-hover-color" data-var="@pagination-hover-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pagination-hover-bg">@pagination-hover-bg</label>
    <input id="input-@pagination-hover-bg" type="text" value="@gray-lighter" data-var="@pagination-hover-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pagination-hover-border">@pagination-hover-border</label>
    <input id="input-@pagination-hover-border" type="text" value="#ddd" data-var="@pagination-hover-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pagination-active-color">@pagination-active-color</label>
    <input id="input-@pagination-active-color" type="text" value="#fff" data-var="@pagination-active-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pagination-active-bg">@pagination-active-bg</label>
    <input id="input-@pagination-active-bg" type="text" value="@brand-primary" data-var="@pagination-active-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pagination-active-border">@pagination-active-border</label>
    <input id="input-@pagination-active-border" type="text" value="@brand-primary" data-var="@pagination-active-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pagination-disabled-color">@pagination-disabled-color</label>
    <input id="input-@pagination-disabled-color" type="text" value="@gray-light" data-var="@pagination-disabled-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pagination-disabled-bg">@pagination-disabled-bg</label>
    <input id="input-@pagination-disabled-bg" type="text" value="#fff" data-var="@pagination-disabled-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pagination-disabled-border">@pagination-disabled-border</label>
    <input id="input-@pagination-disabled-border" type="text" value="#ddd" data-var="@pagination-disabled-border" class="form-control"/>
  </div>
</div>
<h2 id="pager">Pager</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@pager-bg">@pager-bg</label>
    <input id="input-@pager-bg" type="text" value="@pagination-bg" data-var="@pager-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pager-border">@pager-border</label>
    <input id="input-@pager-border" type="text" value="@pagination-border" data-var="@pager-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pager-border-radius">@pager-border-radius</label>
    <input id="input-@pager-border-radius" type="text" value="15px" data-var="@pager-border-radius" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pager-hover-bg">@pager-hover-bg</label>
    <input id="input-@pager-hover-bg" type="text" value="@pagination-hover-bg" data-var="@pager-hover-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pager-active-bg">@pager-active-bg</label>
    <input id="input-@pager-active-bg" type="text" value="@pagination-active-bg" data-var="@pager-active-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pager-active-color">@pager-active-color</label>
    <input id="input-@pager-active-color" type="text" value="@pagination-active-color" data-var="@pager-active-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pager-disabled-color">@pager-disabled-color</label>
    <input id="input-@pager-disabled-color" type="text" value="@pagination-disabled-color" data-var="@pager-disabled-color" class="form-control"/>
  </div>
</div>
<h2 id="jumbotron">Jumbotron</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@jumbotron-padding">@jumbotron-padding</label>
    <input id="input-@jumbotron-padding" type="text" value="30px" data-var="@jumbotron-padding" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@jumbotron-color">@jumbotron-color</label>
    <input id="input-@jumbotron-color" type="text" value="inherit" data-var="@jumbotron-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@jumbotron-bg">@jumbotron-bg</label>
    <input id="input-@jumbotron-bg" type="text" value="@gray-lighter" data-var="@jumbotron-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@jumbotron-heading-color">@jumbotron-heading-color</label>
    <input id="input-@jumbotron-heading-color" type="text" value="inherit" data-var="@jumbotron-heading-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@jumbotron-font-size">@jumbotron-font-size</label>
    <input id="input-@jumbotron-font-size" type="text" value="ceil((@font-size-base * 1.5))" data-var="@jumbotron-font-size" class="form-control"/>
  </div>
</div>
<h2 id="form-states-and-alerts">Form states and alerts</h2>
<p>Define colors for form feedback states and, by default, alerts.</p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@state-success-text">@state-success-text</label>
    <input id="input-@state-success-text" type="text" value="#3c763d" data-var="@state-success-text" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@state-success-bg">@state-success-bg</label>
    <input id="input-@state-success-bg" type="text" value="#dff0d8" data-var="@state-success-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@state-success-border">@state-success-border</label>
    <input id="input-@state-success-border" type="text" value="darken(spin(@state-success-bg, -10), 5%)" data-var="@state-success-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@state-info-text">@state-info-text</label>
    <input id="input-@state-info-text" type="text" value="#31708f" data-var="@state-info-text" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@state-info-bg">@state-info-bg</label>
    <input id="input-@state-info-bg" type="text" value="#d9edf7" data-var="@state-info-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@state-info-border">@state-info-border</label>
    <input id="input-@state-info-border" type="text" value="darken(spin(@state-info-bg, -10), 7%)" data-var="@state-info-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@state-warning-text">@state-warning-text</label>
    <input id="input-@state-warning-text" type="text" value="#8a6d3b" data-var="@state-warning-text" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@state-warning-bg">@state-warning-bg</label>
    <input id="input-@state-warning-bg" type="text" value="#fcf8e3" data-var="@state-warning-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@state-warning-border">@state-warning-border</label>
    <input id="input-@state-warning-border" type="text" value="darken(spin(@state-warning-bg, -10), 5%)" data-var="@state-warning-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@state-danger-text">@state-danger-text</label>
    <input id="input-@state-danger-text" type="text" value="#a94442" data-var="@state-danger-text" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@state-danger-bg">@state-danger-bg</label>
    <input id="input-@state-danger-bg" type="text" value="#f2dede" data-var="@state-danger-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@state-danger-border">@state-danger-border</label>
    <input id="input-@state-danger-border" type="text" value="darken(spin(@state-danger-bg, -10), 5%)" data-var="@state-danger-border" class="form-control"/>
  </div>
</div>
<h2 id="tooltips">Tooltips</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@tooltip-max-width">@tooltip-max-width</label>
    <input id="input-@tooltip-max-width" type="text" value="200px" data-var="@tooltip-max-width" class="form-control"/>
    <p class="help-block">Tooltip max width</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@tooltip-color">@tooltip-color</label>
    <input id="input-@tooltip-color" type="text" value="#fff" data-var="@tooltip-color" class="form-control"/>
    <p class="help-block">Tooltip text color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@tooltip-bg">@tooltip-bg</label>
    <input id="input-@tooltip-bg" type="text" value="#000" data-var="@tooltip-bg" class="form-control"/>
    <p class="help-block">Tooltip background color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@tooltip-opacity">@tooltip-opacity</label>
    <input id="input-@tooltip-opacity" type="text" value=".9" data-var="@tooltip-opacity" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@tooltip-arrow-width">@tooltip-arrow-width</label>
    <input id="input-@tooltip-arrow-width" type="text" value="5px" data-var="@tooltip-arrow-width" class="form-control"/>
    <p class="help-block">Tooltip arrow width</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@tooltip-arrow-color">@tooltip-arrow-color</label>
    <input id="input-@tooltip-arrow-color" type="text" value="@tooltip-bg" data-var="@tooltip-arrow-color" class="form-control"/>
    <p class="help-block">Tooltip arrow color</p>
  </div>
</div>
<h2 id="popovers">Popovers</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@popover-bg">@popover-bg</label>
    <input id="input-@popover-bg" type="text" value="#fff" data-var="@popover-bg" class="form-control"/>
    <p class="help-block">Popover body background color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@popover-max-width">@popover-max-width</label>
    <input id="input-@popover-max-width" type="text" value="276px" data-var="@popover-max-width" class="form-control"/>
    <p class="help-block">Popover maximum width</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@popover-border-color">@popover-border-color</label>
    <input id="input-@popover-border-color" type="text" value="rgba(0,0,0,.2)" data-var="@popover-border-color" class="form-control"/>
    <p class="help-block">Popover border color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@popover-fallback-border-color">@popover-fallback-border-color</label>
    <input id="input-@popover-fallback-border-color" type="text" value="#ccc" data-var="@popover-fallback-border-color" class="form-control"/>
    <p class="help-block">Popover fallback border color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@popover-title-bg">@popover-title-bg</label>
    <input id="input-@popover-title-bg" type="text" value="darken(@popover-bg, 3%)" data-var="@popover-title-bg" class="form-control"/>
    <p class="help-block">Popover title background color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@popover-arrow-width">@popover-arrow-width</label>
    <input id="input-@popover-arrow-width" type="text" value="10px" data-var="@popover-arrow-width" class="form-control"/>
    <p class="help-block">Popover arrow width</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@popover-arrow-color">@popover-arrow-color</label>
    <input id="input-@popover-arrow-color" type="text" value="#fff" data-var="@popover-arrow-color" class="form-control"/>
    <p class="help-block">Popover arrow color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@popover-arrow-outer-width">@popover-arrow-outer-width</label>
    <input id="input-@popover-arrow-outer-width" type="text" value="(@popover-arrow-width + 1)" data-var="@popover-arrow-outer-width" class="form-control"/>
    <p class="help-block">Popover outer arrow width</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@popover-arrow-outer-color">@popover-arrow-outer-color</label>
    <input id="input-@popover-arrow-outer-color" type="text" value="fadein(@popover-border-color, 5%)" data-var="@popover-arrow-outer-color" class="form-control"/>
    <p class="help-block">Popover outer arrow color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@popover-arrow-outer-fallback-color">@popover-arrow-outer-fallback-color</label>
    <input id="input-@popover-arrow-outer-fallback-color" type="text" value="darken(@popover-fallback-border-color, 20%)" data-var="@popover-arrow-outer-fallback-color" class="form-control"/>
    <p class="help-block">Popover outer arrow fallback color</p>
  </div>
</div>
<h2 id="labels">Labels</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@label-default-bg">@label-default-bg</label>
    <input id="input-@label-default-bg" type="text" value="@gray-light" data-var="@label-default-bg" class="form-control"/>
    <p class="help-block">Default label background color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@label-primary-bg">@label-primary-bg</label>
    <input id="input-@label-primary-bg" type="text" value="@brand-primary" data-var="@label-primary-bg" class="form-control"/>
    <p class="help-block">Primary label background color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@label-success-bg">@label-success-bg</label>
    <input id="input-@label-success-bg" type="text" value="@brand-success" data-var="@label-success-bg" class="form-control"/>
    <p class="help-block">Success label background color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@label-info-bg">@label-info-bg</label>
    <input id="input-@label-info-bg" type="text" value="@brand-info" data-var="@label-info-bg" class="form-control"/>
    <p class="help-block">Info label background color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@label-warning-bg">@label-warning-bg</label>
    <input id="input-@label-warning-bg" type="text" value="@brand-warning" data-var="@label-warning-bg" class="form-control"/>
    <p class="help-block">Warning label background color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@label-danger-bg">@label-danger-bg</label>
    <input id="input-@label-danger-bg" type="text" value="@brand-danger" data-var="@label-danger-bg" class="form-control"/>
    <p class="help-block">Danger label background color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@label-color">@label-color</label>
    <input id="input-@label-color" type="text" value="#fff" data-var="@label-color" class="form-control"/>
    <p class="help-block">Default label text color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@label-link-hover-color">@label-link-hover-color</label>
    <input id="input-@label-link-hover-color" type="text" value="#fff" data-var="@label-link-hover-color" class="form-control"/>
    <p class="help-block">Default text color of a linked label</p>
  </div>
</div>
<h2 id="modals">Modals</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@modal-inner-padding">@modal-inner-padding</label>
    <input id="input-@modal-inner-padding" type="text" value="20px" data-var="@modal-inner-padding" class="form-control"/>
    <p class="help-block">Padding applied to the modal body</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@modal-title-padding">@modal-title-padding</label>
    <input id="input-@modal-title-padding" type="text" value="15px" data-var="@modal-title-padding" class="form-control"/>
    <p class="help-block">Padding applied to the modal title</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@modal-title-line-height">@modal-title-line-height</label>
    <input id="input-@modal-title-line-height" type="text" value="@line-height-base" data-var="@modal-title-line-height" class="form-control"/>
    <p class="help-block">Modal title line-height</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@modal-content-bg">@modal-content-bg</label>
    <input id="input-@modal-content-bg" type="text" value="#fff" data-var="@modal-content-bg" class="form-control"/>
    <p class="help-block">Background color of modal content area</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@modal-content-border-color">@modal-content-border-color</label>
    <input id="input-@modal-content-border-color" type="text" value="rgba(0,0,0,.2)" data-var="@modal-content-border-color" class="form-control"/>
    <p class="help-block">Modal content border color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@modal-content-fallback-border-color">@modal-content-fallback-border-color</label>
    <input id="input-@modal-content-fallback-border-color" type="text" value="#999" data-var="@modal-content-fallback-border-color" class="form-control"/>
    <p class="help-block">Modal content border color <strong>for IE8</strong></p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@modal-backdrop-bg">@modal-backdrop-bg</label>
    <input id="input-@modal-backdrop-bg" type="text" value="#000" data-var="@modal-backdrop-bg" class="form-control"/>
    <p class="help-block">Modal backdrop background color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@modal-backdrop-opacity">@modal-backdrop-opacity</label>
    <input id="input-@modal-backdrop-opacity" type="text" value=".5" data-var="@modal-backdrop-opacity" class="form-control"/>
    <p class="help-block">Modal backdrop opacity</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@modal-header-border-color">@modal-header-border-color</label>
    <input id="input-@modal-header-border-color" type="text" value="#e5e5e5" data-var="@modal-header-border-color" class="form-control"/>
    <p class="help-block">Modal header border color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@modal-footer-border-color">@modal-footer-border-color</label>
    <input id="input-@modal-footer-border-color" type="text" value="@modal-header-border-color" data-var="@modal-footer-border-color" class="form-control"/>
    <p class="help-block">Modal footer border color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@modal-lg">@modal-lg</label>
    <input id="input-@modal-lg" type="text" value="900px" data-var="@modal-lg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@modal-md">@modal-md</label>
    <input id="input-@modal-md" type="text" value="600px" data-var="@modal-md" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@modal-sm">@modal-sm</label>
    <input id="input-@modal-sm" type="text" value="300px" data-var="@modal-sm" class="form-control"/>
  </div>
</div>
<h2 id="alerts">Alerts</h2>
<p>Define alert colors, border radius, and padding.</p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@alert-padding">@alert-padding</label>
    <input id="input-@alert-padding" type="text" value="15px" data-var="@alert-padding" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@alert-border-radius">@alert-border-radius</label>
    <input id="input-@alert-border-radius" type="text" value="@border-radius-base" data-var="@alert-border-radius" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@alert-link-font-weight">@alert-link-font-weight</label>
    <input id="input-@alert-link-font-weight" type="text" value="bold" data-var="@alert-link-font-weight" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@alert-success-bg">@alert-success-bg</label>
    <input id="input-@alert-success-bg" type="text" value="@state-success-bg" data-var="@alert-success-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@alert-success-text">@alert-success-text</label>
    <input id="input-@alert-success-text" type="text" value="@state-success-text" data-var="@alert-success-text" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@alert-success-border">@alert-success-border</label>
    <input id="input-@alert-success-border" type="text" value="@state-success-border" data-var="@alert-success-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@alert-info-bg">@alert-info-bg</label>
    <input id="input-@alert-info-bg" type="text" value="@state-info-bg" data-var="@alert-info-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@alert-info-text">@alert-info-text</label>
    <input id="input-@alert-info-text" type="text" value="@state-info-text" data-var="@alert-info-text" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@alert-info-border">@alert-info-border</label>
    <input id="input-@alert-info-border" type="text" value="@state-info-border" data-var="@alert-info-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@alert-warning-bg">@alert-warning-bg</label>
    <input id="input-@alert-warning-bg" type="text" value="@state-warning-bg" data-var="@alert-warning-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@alert-warning-text">@alert-warning-text</label>
    <input id="input-@alert-warning-text" type="text" value="@state-warning-text" data-var="@alert-warning-text" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@alert-warning-border">@alert-warning-border</label>
    <input id="input-@alert-warning-border" type="text" value="@state-warning-border" data-var="@alert-warning-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@alert-danger-bg">@alert-danger-bg</label>
    <input id="input-@alert-danger-bg" type="text" value="@state-danger-bg" data-var="@alert-danger-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@alert-danger-text">@alert-danger-text</label>
    <input id="input-@alert-danger-text" type="text" value="@state-danger-text" data-var="@alert-danger-text" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@alert-danger-border">@alert-danger-border</label>
    <input id="input-@alert-danger-border" type="text" value="@state-danger-border" data-var="@alert-danger-border" class="form-control"/>
  </div>
</div>
<h2 id="progress-bars">Progress bars</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@progress-bg">@progress-bg</label>
    <input id="input-@progress-bg" type="text" value="#f5f5f5" data-var="@progress-bg" class="form-control"/>
    <p class="help-block">Background color of the whole progress component</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@progress-bar-color">@progress-bar-color</label>
    <input id="input-@progress-bar-color" type="text" value="#fff" data-var="@progress-bar-color" class="form-control"/>
    <p class="help-block">Progress bar text color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@progress-bar-bg">@progress-bar-bg</label>
    <input id="input-@progress-bar-bg" type="text" value="@brand-primary" data-var="@progress-bar-bg" class="form-control"/>
    <p class="help-block">Default progress bar color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@progress-bar-success-bg">@progress-bar-success-bg</label>
    <input id="input-@progress-bar-success-bg" type="text" value="@brand-success" data-var="@progress-bar-success-bg" class="form-control"/>
    <p class="help-block">Success progress bar color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@progress-bar-warning-bg">@progress-bar-warning-bg</label>
    <input id="input-@progress-bar-warning-bg" type="text" value="@brand-warning" data-var="@progress-bar-warning-bg" class="form-control"/>
    <p class="help-block">Warning progress bar color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@progress-bar-danger-bg">@progress-bar-danger-bg</label>
    <input id="input-@progress-bar-danger-bg" type="text" value="@brand-danger" data-var="@progress-bar-danger-bg" class="form-control"/>
    <p class="help-block">Danger progress bar color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@progress-bar-info-bg">@progress-bar-info-bg</label>
    <input id="input-@progress-bar-info-bg" type="text" value="@brand-info" data-var="@progress-bar-info-bg" class="form-control"/>
    <p class="help-block">Info progress bar color</p>
  </div>
</div>
<h2 id="list-group">List group</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@list-group-bg">@list-group-bg</label>
    <input id="input-@list-group-bg" type="text" value="#fff" data-var="@list-group-bg" class="form-control"/>
    <p class="help-block">Background color on <code>.list-group-item</code></p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@list-group-border">@list-group-border</label>
    <input id="input-@list-group-border" type="text" value="#ddd" data-var="@list-group-border" class="form-control"/>
    <p class="help-block"><code>.list-group-item</code> border color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@list-group-border-radius">@list-group-border-radius</label>
    <input id="input-@list-group-border-radius" type="text" value="@border-radius-base" data-var="@list-group-border-radius" class="form-control"/>
    <p class="help-block">List group border radius</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@list-group-hover-bg">@list-group-hover-bg</label>
    <input id="input-@list-group-hover-bg" type="text" value="#f5f5f5" data-var="@list-group-hover-bg" class="form-control"/>
    <p class="help-block">Background color of single list elements on hover</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@list-group-active-color">@list-group-active-color</label>
    <input id="input-@list-group-active-color" type="text" value="@component-active-color" data-var="@list-group-active-color" class="form-control"/>
    <p class="help-block">Text color of active list elements</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@list-group-active-bg">@list-group-active-bg</label>
    <input id="input-@list-group-active-bg" type="text" value="@component-active-bg" data-var="@list-group-active-bg" class="form-control"/>
    <p class="help-block">Background color of active list elements</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@list-group-active-border">@list-group-active-border</label>
    <input id="input-@list-group-active-border" type="text" value="@list-group-active-bg" data-var="@list-group-active-border" class="form-control"/>
    <p class="help-block">Border color of active list elements</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@list-group-active-text-color">@list-group-active-text-color</label>
    <input id="input-@list-group-active-text-color" type="text" value="lighten(@list-group-active-bg, 40%)" data-var="@list-group-active-text-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@list-group-link-color">@list-group-link-color</label>
    <input id="input-@list-group-link-color" type="text" value="#555" data-var="@list-group-link-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@list-group-link-heading-color">@list-group-link-heading-color</label>
    <input id="input-@list-group-link-heading-color" type="text" value="#333" data-var="@list-group-link-heading-color" class="form-control"/>
  </div>
</div>
<h2 id="panels">Panels</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@panel-bg">@panel-bg</label>
    <input id="input-@panel-bg" type="text" value="#fff" data-var="@panel-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-body-padding">@panel-body-padding</label>
    <input id="input-@panel-body-padding" type="text" value="15px" data-var="@panel-body-padding" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-border-radius">@panel-border-radius</label>
    <input id="input-@panel-border-radius" type="text" value="@border-radius-base" data-var="@panel-border-radius" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-inner-border">@panel-inner-border</label>
    <input id="input-@panel-inner-border" type="text" value="#ddd" data-var="@panel-inner-border" class="form-control"/>
    <p class="help-block">Border color for elements within panels</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-footer-bg">@panel-footer-bg</label>
    <input id="input-@panel-footer-bg" type="text" value="#f5f5f5" data-var="@panel-footer-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-default-text">@panel-default-text</label>
    <input id="input-@panel-default-text" type="text" value="@gray-dark" data-var="@panel-default-text" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-default-border">@panel-default-border</label>
    <input id="input-@panel-default-border" type="text" value="#ddd" data-var="@panel-default-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-default-heading-bg">@panel-default-heading-bg</label>
    <input id="input-@panel-default-heading-bg" type="text" value="#f5f5f5" data-var="@panel-default-heading-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-primary-text">@panel-primary-text</label>
    <input id="input-@panel-primary-text" type="text" value="#fff" data-var="@panel-primary-text" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-primary-border">@panel-primary-border</label>
    <input id="input-@panel-primary-border" type="text" value="@brand-primary" data-var="@panel-primary-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-primary-heading-bg">@panel-primary-heading-bg</label>
    <input id="input-@panel-primary-heading-bg" type="text" value="@brand-primary" data-var="@panel-primary-heading-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-success-text">@panel-success-text</label>
    <input id="input-@panel-success-text" type="text" value="@state-success-text" data-var="@panel-success-text" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-success-border">@panel-success-border</label>
    <input id="input-@panel-success-border" type="text" value="@state-success-border" data-var="@panel-success-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-success-heading-bg">@panel-success-heading-bg</label>
    <input id="input-@panel-success-heading-bg" type="text" value="@state-success-bg" data-var="@panel-success-heading-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-info-text">@panel-info-text</label>
    <input id="input-@panel-info-text" type="text" value="@state-info-text" data-var="@panel-info-text" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-info-border">@panel-info-border</label>
    <input id="input-@panel-info-border" type="text" value="@state-info-border" data-var="@panel-info-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-info-heading-bg">@panel-info-heading-bg</label>
    <input id="input-@panel-info-heading-bg" type="text" value="@state-info-bg" data-var="@panel-info-heading-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-warning-text">@panel-warning-text</label>
    <input id="input-@panel-warning-text" type="text" value="@state-warning-text" data-var="@panel-warning-text" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-warning-border">@panel-warning-border</label>
    <input id="input-@panel-warning-border" type="text" value="@state-warning-border" data-var="@panel-warning-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-warning-heading-bg">@panel-warning-heading-bg</label>
    <input id="input-@panel-warning-heading-bg" type="text" value="@state-warning-bg" data-var="@panel-warning-heading-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-danger-text">@panel-danger-text</label>
    <input id="input-@panel-danger-text" type="text" value="@state-danger-text" data-var="@panel-danger-text" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-danger-border">@panel-danger-border</label>
    <input id="input-@panel-danger-border" type="text" value="@state-danger-border" data-var="@panel-danger-border" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@panel-danger-heading-bg">@panel-danger-heading-bg</label>
    <input id="input-@panel-danger-heading-bg" type="text" value="@state-danger-bg" data-var="@panel-danger-heading-bg" class="form-control"/>
  </div>
</div>
<h2 id="thumbnails">Thumbnails</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@thumbnail-padding">@thumbnail-padding</label>
    <input id="input-@thumbnail-padding" type="text" value="4px" data-var="@thumbnail-padding" class="form-control"/>
    <p class="help-block">Padding around the thumbnail image</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@thumbnail-bg">@thumbnail-bg</label>
    <input id="input-@thumbnail-bg" type="text" value="@body-bg" data-var="@thumbnail-bg" class="form-control"/>
    <p class="help-block">Thumbnail background color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@thumbnail-border">@thumbnail-border</label>
    <input id="input-@thumbnail-border" type="text" value="#ddd" data-var="@thumbnail-border" class="form-control"/>
    <p class="help-block">Thumbnail border color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@thumbnail-border-radius">@thumbnail-border-radius</label>
    <input id="input-@thumbnail-border-radius" type="text" value="@border-radius-base" data-var="@thumbnail-border-radius" class="form-control"/>
    <p class="help-block">Thumbnail border radius</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@thumbnail-caption-color">@thumbnail-caption-color</label>
    <input id="input-@thumbnail-caption-color" type="text" value="@text-color" data-var="@thumbnail-caption-color" class="form-control"/>
    <p class="help-block">Custom text color for thumbnail captions</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@thumbnail-caption-padding">@thumbnail-caption-padding</label>
    <input id="input-@thumbnail-caption-padding" type="text" value="9px" data-var="@thumbnail-caption-padding" class="form-control"/>
    <p class="help-block">Padding around the thumbnail caption</p>
  </div>
</div>
<h2 id="wells">Wells</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@well-bg">@well-bg</label>
    <input id="input-@well-bg" type="text" value="#f5f5f5" data-var="@well-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@well-border">@well-border</label>
    <input id="input-@well-border" type="text" value="darken(@well-bg, 7%)" data-var="@well-border" class="form-control"/>
  </div>
</div>
<h2 id="badges">Badges</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@badge-color">@badge-color</label>
    <input id="input-@badge-color" type="text" value="#fff" data-var="@badge-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@badge-link-hover-color">@badge-link-hover-color</label>
    <input id="input-@badge-link-hover-color" type="text" value="#fff" data-var="@badge-link-hover-color" class="form-control"/>
    <p class="help-block">Linked badge text color on hover</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@badge-bg">@badge-bg</label>
    <input id="input-@badge-bg" type="text" value="@gray-light" data-var="@badge-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@badge-active-color">@badge-active-color</label>
    <input id="input-@badge-active-color" type="text" value="@link-color" data-var="@badge-active-color" class="form-control"/>
    <p class="help-block">Badge text color in active nav link</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@badge-active-bg">@badge-active-bg</label>
    <input id="input-@badge-active-bg" type="text" value="#fff" data-var="@badge-active-bg" class="form-control"/>
    <p class="help-block">Badge background color in active nav link</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@badge-font-weight">@badge-font-weight</label>
    <input id="input-@badge-font-weight" type="text" value="bold" data-var="@badge-font-weight" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@badge-border-radius">@badge-border-radius</label>
    <input id="input-@badge-border-radius" type="text" value="10px" data-var="@badge-border-radius" class="form-control"/>
  </div>
</div>
<h2 id="breadcrumbs">Breadcrumbs</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@breadcrumb-padding-vertical">@breadcrumb-padding-vertical</label>
    <input id="input-@breadcrumb-padding-vertical" type="text" value="8px" data-var="@breadcrumb-padding-vertical" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@breadcrumb-padding-horizontal">@breadcrumb-padding-horizontal</label>
    <input id="input-@breadcrumb-padding-horizontal" type="text" value="15px" data-var="@breadcrumb-padding-horizontal" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@breadcrumb-bg">@breadcrumb-bg</label>
    <input id="input-@breadcrumb-bg" type="text" value="#f5f5f5" data-var="@breadcrumb-bg" class="form-control"/>
    <p class="help-block">Breadcrumb background color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@breadcrumb-color">@breadcrumb-color</label>
    <input id="input-@breadcrumb-color" type="text" value="#ccc" data-var="@breadcrumb-color" class="form-control"/>
    <p class="help-block">Breadcrumb text color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@breadcrumb-active-color">@breadcrumb-active-color</label>
    <input id="input-@breadcrumb-active-color" type="text" value="@gray-light" data-var="@breadcrumb-active-color" class="form-control"/>
    <p class="help-block">Text color of current page in the breadcrumb</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@breadcrumb-separator">@breadcrumb-separator</label>
    <input id="input-@breadcrumb-separator" type="text" value="&quot;/&quot;" data-var="@breadcrumb-separator" class="form-control"/>
    <p class="help-block">Textual separator for between breadcrumb elements</p>
  </div>
</div>
<h2 id="carousel">Carousel</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@carousel-text-shadow">@carousel-text-shadow</label>
    <input id="input-@carousel-text-shadow" type="text" value="0 1px 2px rgba(0,0,0,.6)" data-var="@carousel-text-shadow" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@carousel-control-color">@carousel-control-color</label>
    <input id="input-@carousel-control-color" type="text" value="#fff" data-var="@carousel-control-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@carousel-control-width">@carousel-control-width</label>
    <input id="input-@carousel-control-width" type="text" value="15%" data-var="@carousel-control-width" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@carousel-control-opacity">@carousel-control-opacity</label>
    <input id="input-@carousel-control-opacity" type="text" value=".5" data-var="@carousel-control-opacity" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@carousel-control-font-size">@carousel-control-font-size</label>
    <input id="input-@carousel-control-font-size" type="text" value="20px" data-var="@carousel-control-font-size" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@carousel-indicator-active-bg">@carousel-indicator-active-bg</label>
    <input id="input-@carousel-indicator-active-bg" type="text" value="#fff" data-var="@carousel-indicator-active-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@carousel-indicator-border-color">@carousel-indicator-border-color</label>
    <input id="input-@carousel-indicator-border-color" type="text" value="#fff" data-var="@carousel-indicator-border-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@carousel-caption-color">@carousel-caption-color</label>
    <input id="input-@carousel-caption-color" type="text" value="#fff" data-var="@carousel-caption-color" class="form-control"/>
  </div>
</div>
<h2 id="close">Close</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@close-font-weight">@close-font-weight</label>
    <input id="input-@close-font-weight" type="text" value="bold" data-var="@close-font-weight" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@close-color">@close-color</label>
    <input id="input-@close-color" type="text" value="#000" data-var="@close-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@close-text-shadow">@close-text-shadow</label>
    <input id="input-@close-text-shadow" type="text" value="0 1px 0 #fff" data-var="@close-text-shadow" class="form-control"/>
  </div>
</div>
<h2 id="code">Code</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@code-color">@code-color</label>
    <input id="input-@code-color" type="text" value="#c7254e" data-var="@code-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@code-bg">@code-bg</label>
    <input id="input-@code-bg" type="text" value="#f9f2f4" data-var="@code-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@kbd-color">@kbd-color</label>
    <input id="input-@kbd-color" type="text" value="#fff" data-var="@kbd-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@kbd-bg">@kbd-bg</label>
    <input id="input-@kbd-bg" type="text" value="#333" data-var="@kbd-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pre-bg">@pre-bg</label>
    <input id="input-@pre-bg" type="text" value="#f5f5f5" data-var="@pre-bg" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pre-color">@pre-color</label>
    <input id="input-@pre-color" type="text" value="@gray-dark" data-var="@pre-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pre-border-color">@pre-border-color</label>
    <input id="input-@pre-border-color" type="text" value="#ccc" data-var="@pre-border-color" class="form-control"/>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@pre-scrollable-max-height">@pre-scrollable-max-height</label>
    <input id="input-@pre-scrollable-max-height" type="text" value="340px" data-var="@pre-scrollable-max-height" class="form-control"/>
  </div>
</div>
<h2 id="type">Type</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@text-muted">@text-muted</label>
    <input id="input-@text-muted" type="text" value="@gray-light" data-var="@text-muted" class="form-control"/>
    <p class="help-block">Text muted color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@abbr-border-color">@abbr-border-color</label>
    <input id="input-@abbr-border-color" type="text" value="@gray-light" data-var="@abbr-border-color" class="form-control"/>
    <p class="help-block">Abbreviations and acronyms border color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@headings-small-color">@headings-small-color</label>
    <input id="input-@headings-small-color" type="text" value="@gray-light" data-var="@headings-small-color" class="form-control"/>
    <p class="help-block">Headings small color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@blockquote-small-color">@blockquote-small-color</label>
    <input id="input-@blockquote-small-color" type="text" value="@gray-light" data-var="@blockquote-small-color" class="form-control"/>
    <p class="help-block">Blockquote small color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@blockquote-font-size">@blockquote-font-size</label>
    <input id="input-@blockquote-font-size" type="text" value="(@font-size-base * 1.25)" data-var="@blockquote-font-size" class="form-control"/>
    <p class="help-block">Blockquote font size</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@blockquote-border-color">@blockquote-border-color</label>
    <input id="input-@blockquote-border-color" type="text" value="@gray-lighter" data-var="@blockquote-border-color" class="form-control"/>
    <p class="help-block">Blockquote border color</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@page-header-border-color">@page-header-border-color</label>
    <input id="input-@page-header-border-color" type="text" value="@gray-lighter" data-var="@page-header-border-color" class="form-control"/>
    <p class="help-block">Page header border color</p>
  </div>
</div>
<h2 id="miscellaneous">Miscellaneous</h2>
<p></p>
<div class="row">
  <div class="bs-customizer-input">
    <label for="input-@hr-border">@hr-border</label>
    <input id="input-@hr-border" type="text" value="@gray-lighter" data-var="@hr-border" class="form-control"/>
    <p class="help-block">Horizontal line color.</p>
  </div>
  <div class="bs-customizer-input">
    <label for="input-@component-offset-horizontal">@component-offset-horizontal</label>
    <input id="input-@component-offset-horizontal" type="text" value="180px" data-var="@component-offset-horizontal" class="form-control"/>
    <p class="help-block">Horizontal offset for forms and lists.</p>
  </div>
</div>
<!-- NOTE: DO NOT EDIT THE PRECEDING SECTION DIRECTLY! It is autogenerated via the `build-customizer-html` Grunt task using the customizer-variables.jade template.-->
  </div>



  <div class="bs-docs-section">
    <h1 id="download" class="page-header">Download</h1>

    <p class="lead">Hooray! Your custom version of Bootstrap is now ready to be compiled. Just click the button below to finish the process.</p>
    <div class="bs-customize-download">
      <button type="submit" id="btn-compile" class="btn btn-block btn-lg btn-outline" onclick="_gaq.push(['_trackEvent', 'Customize', 'Download', 'Customize and Download']);">Compile and Download</button>
    </div>
  </div><!-- /download -->
</form>

        </div>
        <div class="col-md-3">
          <div class="bs-docs-sidebar hidden-print" role="complementary">
            <ul class="nav bs-docs-sidenav">
              
                
<!-- NOTE: DO NOT EDIT THE FOLLOWING SECTION DIRECTLY! It is autogenerated via the `build-customizer-html` Grunt task using the customizer-nav.jade template.-->
<li><a href="#less">Less components</a></li>
<li><a href="#plugins">jQuery plugins</a></li>
<li><a href="#less-variables">Less variables</a>
  <ul class="nav">
    <li><a href="#colors">Colors</a></li>
    <li><a href="#scaffolding">Scaffolding</a></li>
    <li><a href="#typography">Typography</a></li>
    <li><a href="#components">Components</a></li>
    <li><a href="#tables">Tables</a></li>
    <li><a href="#buttons">Buttons</a></li>
    <li><a href="#forms">Forms</a></li>
    <li><a href="#dropdowns">Dropdowns</a></li>
    <li><a href="#media-queries-breakpoints">Media queries breakpoints</a></li>
    <li><a href="#grid-system">Grid system</a></li>
    <li><a href="#container-sizes">Container sizes</a></li>
    <li><a href="#navbar">Navbar</a></li>
    <li><a href="#navs">Navs</a></li>
    <li><a href="#tabs">Tabs</a></li>
    <li><a href="#pills">Pills</a></li>
    <li><a href="#pagination">Pagination</a></li>
    <li><a href="#pager">Pager</a></li>
    <li><a href="#jumbotron">Jumbotron</a></li>
    <li><a href="#form-states-and-alerts">Form states and alerts</a></li>
    <li><a href="#tooltips">Tooltips</a></li>
    <li><a href="#popovers">Popovers</a></li>
    <li><a href="#labels">Labels</a></li>
    <li><a href="#modals">Modals</a></li>
    <li><a href="#alerts">Alerts</a></li>
    <li><a href="#progress-bars">Progress bars</a></li>
    <li><a href="#list-group">List group</a></li>
    <li><a href="#panels">Panels</a></li>
    <li><a href="#thumbnails">Thumbnails</a></li>
    <li><a href="#wells">Wells</a></li>
    <li><a href="#badges">Badges</a></li>
    <li><a href="#breadcrumbs">Breadcrumbs</a></li>
    <li><a href="#carousel">Carousel</a></li>
    <li><a href="#close">Close</a></li>
    <li><a href="#code">Code</a></li>
    <li><a href="#type">Type</a></li>
    <li><a href="#miscellaneous">Miscellaneous</a></li>
  </ul>
</li>
<li><a href="#download">Download</a></li>
<!-- NOTE: DO NOT EDIT THE PRECEDING SECTION DIRECTLY! It is autogenerated via the `build-customizer-html` Grunt task using the customizer-nav.jade template.-->
              
            </ul>
            <a class="back-to-top" href="#top">
              Back to top
            </a>
          </div>
        </div>
      </div>

    </div>