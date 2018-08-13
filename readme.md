# Kirby Panel Checklists

Create automatic checklists inside the panel. You can test anything you want.

- **Version:** 0.2 beta
- **Requirement:** Kirby 3
- [Changelog](docs/changelog.md)
- [Disclaimer](https://devonera.se/docs/disclaimer/?user=jenstornell&plugin=kirby-panel-checklists)
- [Donate](https://devonera.se/docs/donate/?user=jenstornell&plugin=kirby-panel-checklists)

## Screenshot

![](docs/screenshot.png)

## Blueprint

To see the field add the following into your blueprint.

```text
checklist:
  type: checklist
  list: my_checklist
```

## Usage

Now you need to setup some tests. It's done in your config file, or in a plugin.

```php
return [
  'jenstornell.checklists.lists' => [
    'my_checklist' => [
      function($page) {
        return [
          'text' => 'Success on ' . $page->title(),
          'color' => 'green',
          'icon' => 'check'
        ];
      },
      function($page) {
        return [
          'text' => 'It is global',
          'color' => 'blue',
          'icon' => 'globe'
        ];
      },
    ]
  ]
];
```

Each function represents one test and one list item.

- The available colors are `black`, `blue`, `gray`, `green`, `orange`,  and `red`.
- The available icons are the ones that are built into the panel.

## Plugin support

With many items directly in the config file, it can be messy. To clean it up, you can wrap it inside a plugin.

### A full list

```php
function checklistsMyChecklist() {
  // Return the whole checklist array
}
```

### Just one list item

```php
function checklistsMyitem() {
  // Return just one list item
}
```

## Checklist ideas

You can test any anything you want. Below are a few ideas.

- SEO (Search Engine Optimization)
- Environment/security
- Content quality