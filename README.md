# CraftyLove for Craft CMS

Give visitors the ability to "like" your entries.

## Installation

### Download version 1.x.x

1. Go to the [Releases tab](https://github.com/levidurfee/craftylove/releases)
2. Download the latest version or the version you want
3. Unzip the contents
4. Upload the files to craft/plugins/
5. Scroll down for installing it in the CP

### Install in CP

1. Login to Craft
2. Click **Settings**
3. Click **Plugins**
4. Click **Install** on the row Crafty Love is listed

## Usage

I am using [FontAwesome](https://fortawesome.github.io/Font-Awesome/) for the heart icon.

```php
{% for entry in craft.entries.section('news').limit(5).find() %}
    <p><a href="{{entry.url }}">{{ entry.title }}</a>
    {# there is probably a better way to do this #}
    {% set params = {id: entry.id} %}
    {{ craft.CraftyLove.getLikes(params) }} likes!
    <form method="POST" action="" accept-charset="UTF-8">
        <input type="hidden" name="action" value="craftyLove/likes/addNewLike">
        <input type="hidden" name="redirect" value="/">
        <input type="hidden" name="id" value="{{ entry.id }}">
        <button type="submit"><i class="fa fa-heart></i></button>
    </form>
    </p>
{% endfor %}
```

## Changelog

### 1.0.0

* Add likes
* Get likes
* Initial release
