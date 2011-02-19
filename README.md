# Theme Simple

This is a theme used for various web applications running CakePHP 1.3.
It is plain and basic, black on white.

**Assume nothing:** The Simple theme should work without any additional content available.

**Keep it minimalistic:** The Simple theme should be as simple as possible.

**Keep it lightweight:** The Underlying markup is lightweight, easy to transform and free of markup-overhead just to produce more visually appealing results. The markup should treat the content with respect and work without the inclusion of tons of libraries.

## Requirements

You need CakePHP 1.3 or higher, to make use of the webroot-folder within the themes-folder.

Also, you need to activate themes, by setting these variables in your AppController:

	public $view = 'Theme'; //tells CakePHP to use Themed View
	public $theme = ' <theme_name> '; //tells CakePHP to use this <theme_name>

### Wait, what about CakePHP 1.2?

If you need to use CakePHP 1.2 for whatever reason, try to symlink the webroot folder to `APP\webroot\themes\ <theme_name> `

## Installation

Within your CakePHP applications root type the following command to add theme_simple as a git submodule.

	git submodule add git@github.com:bruensicke/theme_simple.git app/views/themed/simple

## Development

Simple Theme can easily be developed without CakePHP running or PHP parsing at all. Just open `webroot/index.html` in your favourite browser.
All Assets (js, css, img) should be loaded as usual and you can change markup to your likings and see how they render. Please notice, that changes to the markup will not reflect the themes layouts within CakePHP. It is more a preview of how assets will be rendered.
Therefore, to change something crucial, you have to work within the folders `/css`, `/js` or `/img`. Make sure to reference every other asserts relative, so both access methods remain intact.

## Markup

Have a look at the following markups, to get a clue of what this layout is about.

### Layout "default.ctp"

This is just the main-markup without head and the rest.

	<div id="page">
		<header id="header">
			<?php echo $this->element('header'); ?>
		</header>
		<div id="main">
			<?php
			echo $this->element('flash');
			echo $content_for_layout;
			?>
			<div class="clear"></div>
		</div>
		<footer id="footer">
			<?php echo $this->element('footer'); ?>
		</footer>
	</div>

### header.ctp

We suggest the following `elements/header.ctp` in the app:

	echo $this->element('nav.main');
	echo $this->element('content_start');

### flash.ctp

We suggest the following `elements/flash.ctp` in the app:

	echo $this->Session->flash();

### 3 columns

You can use this to have 3 columns in a row.

	<section class="col3">
		<h2>optional title</h2>
		<div class="col first">
			<h2></h2>
		</div>
		<div class="col">
			<p class="large"></p>
		</div>
		<div class="col">
			<p></p>
		</div>
	</section>

	<article>
		<img />
	</article>

### Articles (4 in a row)

You can use this markup to have 4 articles side by side.

	<section class="tiles">
		<h2>title for section</h2>
		<article>
			<a><img /></a>
			<div class="box">
				<header>
					<time class="meta" datetime="2011-02-14T16:53:55+00:00">February 14, 2011 16:53</time>
					<h3></h3>
				</header>
				<p></p>
			</div>
		</article>
		<article /> ...
		<article /> ...
		<article /> ...
	</section>

### Inline Tabs

These inline-Tabs are shown on the upper right.

	<ul class="inlineTabs">
		<li class="current">
			<span><span>highlights</span></span>
		</li>
		<li>
			<span><span><a title="view all projects" href="/en/projects/all">all</a></span></span>
		</li>
	</ul>
	<article>
		
	</article>

## Owners

Simple theme is developed by [brünsicke.com GmbH](http://bruensicke.com/). Get in touch if you need help making your next project.