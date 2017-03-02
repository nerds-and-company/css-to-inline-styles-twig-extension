# Inline Css extension to convert css to inline styles

Based on work by Roberto Trunfio on https://github.com/robertotru/ToInlineStyleEmailBundle
Makes use of https://github.com/tijsverkoyen/CssToInlineStyles by Tijs Verkoyen

## Usage
```
{% inlincecss '/absolute/path/file.css' %}
   <tag>Html to be converted</tag>
{% endinlinecss %}
```
