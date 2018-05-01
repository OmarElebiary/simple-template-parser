# simple-template-parser

A simple php template parser.

`template-parser` replaces all placeholders in html template with actual values.

## Usage

Simply instantiate `TemplateParser` with a link to the HTML template.

### Example
Let's say that we have an html template called ``profile.tpl`` :

```html
<h1>{username} profile</h1>

<p><b>Name:</b> {name}</p>
<p><b>Email:</b> {age}</p>
<p><b>Location:</b> {location}</p>
```

You can parse it like this:

``` php
include("TemplateParser.php");

// Load the template file
$profile = new TemplateParser("profile.tpl");

$data = array("username" => "user_one", 
              "name" => "Ben",
              "age" => "33",
              "location" => "Egypt");

$profile->set_data($data);

echo $profile->output();
```

Output:

```html
<h1>user_one profile</h1>

<p><b>Name:</b> Ben</p> 
<p><b>Email:</b> 33</p> 
<p><b>Location:</b> Egypt</p>
```

The returned html string contains all the values instead the placeholders.
