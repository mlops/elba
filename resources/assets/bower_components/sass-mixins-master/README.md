# <img src="http://sass-lang.com/assets/img/logos/logo-235e394c.png" alt="Sass" width="80"> Mixins and Functions

With the emergence of the pre-processor, the first one I started studying was the [Less](http://lesscss.org/). Then I migrated to [Sass](http://sass-lang.com/) to use the framework [Compass](http://compass-style.org/), I created a [template](https://github.com/tiagoporto/my-gulp-template) for Gulp.js with the framework and the Sass became part of my daily life. As I began to study more deeply the language I wanted to have complete control of my generated code and leave it independent of a framework, so I stopped using the Compass framework.

I updated my [Gulp.js template](https://github.com/tiagoporto/my-gulp-template) and after testing the [autoprefixer](https://github.com/postcss/autoprefixer) to create automatic CSS prefixes, I decided to use Sass mixins, because I would lose control of the generated code again, and in my workflow didn't feel the need to spend the CSS for another process consuming more time.

Here are the Sass mixins and functions that are currently part of my workflow. Hope it can serve for you too.

> I'm updating the readme gradually. If you have questions feel free to send me a message.


Uses the following technologies:

* [Sass](http://sass-lang.com/)

## Includes the following mixins

* Animations
	* Animation
	* Keyframes
	* [Transition](#transition)
	* Transition-style
* Arrow
* Backface-visibility
* [Background-size](#background-size)
* [Border-radius](#border-radius)
* [Box-shadow](#box-shadow)
* [Box-sizing](#box-sizing)
* Columns
* [Opacity](#opacity)
* Perspective
* Filter
* Gradient
	* Linear-gradient
	* Radial-gradient
* Transform
* Typography
	* Columns
	* @font-face
	* font-feature-settings

## Includes the following functions

* em()
* image-url()


## Dependencies

* [Ruby](https://www.ruby-lang.org/)
* [Gem Sass](https://rubygems.org/gems/sass)


You need some pre-processor to process sass to css

**Applications**
* [Koala](http://koala-app.com/)
* [LiveReload](http://livereload.com/)
* [Scout](http://mhs.github.io/scout-app/)

**Gulp Plugins**
* [gulp-ruby-sass](https://www.npmjs.org/package/gulp-ruby-sass)
* [gulp-sass](https://www.npmjs.org/package/gulp-sass)

**Grunt plugin**
* [grunt-contrib-sass](https://github.com/gruntjs/grunt-contrib-sass)
* [grunt-sass](https://github.com/sindresorhus/grunt-sass)

**Guard plugin**
* [guard-sass](https://github.com/hawx/guard-sass)


## Usage

Just download the files and import the files `_mixins.sass` and `_functions.sass` on your base Sass file.

Below the imports, you can declare the functions and mixins

### Mixins



#### Background-size

The variable `$value` receive the values of width and height. You can pass all parameters separated by space, it's not necessary use comma. Or just the simple values like `cover` and `contain`.

Syntax `.sass`

```sass
	+background-size($value)
```
Syntax `.scss`


```scss
	@include background-size($value);
```

**Example**
```sass
	#box
		width: 300px
		height: 300px
		background: url("../images/sprite.png") no-repeat
		+background-size(20% 80%)

	#circle
		width: 300px
		height: 300px
		background: url("../images/sprite.png") no-repeat
		+background-size(contain)
```

**Output**
```css
	#box {
		width: 300px;
		height: 300px;
		background: url("../images/sprite.png") no-repeat black;
		-webkit-background-size: 20% 80%;
		-moz-background-size: 20% 80%;
		-o-background-size: 20% 80%;
		background-size: 20% 80%;
	}

	#circle {
	  width: 300px;
	  height: 300px;
		background: url("../images/sprite.png") no-repeat black;
		-webkit-background-size: contain;
		-moz-background-size: contain;
		-o-background-size: contain;
		background-size: contain;
	}
```

#### Box-shadow

The variable `$parameters` receive all the parameters: horizontal shadow, vertical shadow, blur, spread and color. You can pass all parameters separated by space, it's not necessary use comma.

Syntax `.sass`

```sass
	+box-shadow($parameters)
```
Syntax `.scss`


```scss
	@include box-shadow($parameters);
```

**Example**
```sass
	#box
		width: 300px
		height: 300px
		background: blue
		+box-shadow(5px 5px 2px #000)
```

**Output**
```css
	#box {
		width: 300px;
		height: 300px;
		background: blue;
		-webkit-box-shadow: 5px 5px 2px #000;
		-moz-box-shadow: 5px 5px 2px #000;
		box-shadow: 5px 5px 2px #000;
	}
```

#### Border-radius

The variable `$radius` receive all four values for each radiu in the order: top-left, top-right, bottom-right, bottom-left. Or simplifying with three, two ou one radiu. You can pass all parameters separated by space, it's not necessary use comma.

Syntax `.sass`

```sass
	+border-radius($radius)
```
Syntax `.scss`


```scss
	@include border-radius($radius);
```

**Example**
```sass
	#box
		width: 300px
		height: 300px
		background: #000
		+border-radius(10px 5px)
```

**Output**
```css
	#box {
		width: 300px;
		height: 300px;
		background: #000;
		-webkit-border-radius: 10px 5px;
		-moz-border-radius: 10px 5px;
		border-radius: 10px 5px;
	}
```


#### Opacity

Syntax `.sass`

```sass
	+opacity($value)
```
Syntax `.scss`

```scss
	@include opacity($value);
```

**Example**
```sass
	body
		+opacity(0.5)
```

**Output**
```css
	body {
		opacity: 0.5;
		filter: alpha(opacity=50); /* IE8 and earlier */
	}
```
\* Comments are not generated

#### Transition

The variable `$parameters` receive all transitions parameters: property, duration, timing-function and delay. You can pass all parameters separated by space, it's not necessary use comma.

Syntax `.sass`

```sass
	+transition($parameters)
```
Syntax `.scss`

```scss
	@include transition($parameters);
```

**Example**
```sass
	#circle
		+transition(all 2s) // Complete form

		&:hover
			width: 100px

	#box
		width: 300px
		height: 300px
		background: #000
		+transition(all 2s linear 1s) // Complete form

		&:hover
			width: 100px
```

**Output**
```css
	#circle {
		width: 300px;
		height: 300px;
		background: #000;
		-webkit-transition: all 2s;
		-moz-transition: all 2s;
		-o-transition: all 2s;
		-ms-transition: all 2s;
		transition: all 2s;
	}

	#circle:hover {
		width: 100px;
	}

	#box {
		width: 300px;
		height: 300px;
		background: #000;
		-webkit-transition: all 2s linear 1s;
		-moz-transition: all 2s linear 1s;
		-o-transition: all 2s linear 1s;
		-ms-transition: all 2s linear 1s;
		transition: all 2s linear 1s;
	}

	#box:hover {
		width: 100px;
	}
```

#### Box-sizing

Syntax `.sass`

```sass
	+box-sizing($type)
```
Syntax `.scss`

```scss
	@include box-sizing($type);
```

**Example**

The default value of `$type` is "border-box"

```sass
	body
		+box-sizing() // is equal to +box-sizing(border-box)

	div
		+box-sizing(content-box)
```

**Output**
```css
	body {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}

	div {
		-webkit-box-sizing: content-box;
		-moz-box-sizing: content-box;
		box-sizing: content-box;
	}
```
