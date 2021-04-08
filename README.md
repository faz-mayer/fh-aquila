# [fh-aquila 🎨]

- A WordPress theme Project

## Maintainer

| Name | Github Username |
| ---- | --------------- |
| FM   | faz-mayer       |

## Usage

1. Clone the WordPress theme [fh-aquila](hptts://#) in your WordPress
   themes directory and activate it.

## Dashboard Setup.

1. Create pages called 'Startseite' and 'Blog' and set them from Appearance > Customizer > Homepage Settings like so:

```bash
A static page (select below)

Homepage:
Startseite
```

```bash
Posts page:
— Select — (you can choose 'Blog')

```

## Development ( To be added )

**Install**

Clone the repo and run

```bash
cd fh-aquila/assets
npm install
```

**During development**

```bash
npm run dev
```

Run precommit from assets directory before pushing the code for development/contribution.

```
cd assets && npm run precommit
```

**Production**

```bash
npm run prod
```

**Linting & Formatting**

The following command will fix most errors and show and remaining ones which cannot be fixed automatically.

```bash
npm run lint:fix
```

We follow the stylelint configuration used in WordPress Gutenberg, run the following command to lint and fix styles.

```bash
npm run stylelint:fix
```

Format code with prettier ( TO BE ADDED )

```bash
npm run format-js
```

## :Best Practice

**Recommended Image Sizes for fh-aquila**

```bash
Blog posts: 480 x 315px
Hero images: 1061 x 233px
```

**Posts**

```bash
For 'Aktuelles' assign the post to the category 'aktuelles'.
```

```bash
All menu-items have their own custom post types:
Angebote, Über uns, Infothek, Projekte & Kampagnen, Spenden & Fördern, FAQ
```
