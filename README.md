# TYPO3 Portfolio Extension

The portfolio extension is a versatile TYPO3 extension designed for developers, designers, photographers, and other creative professionals who wish to showcase their work through a portfolio website. This extension provides robust features including a variety of content elements, a sophisticated projects plugin, and extensive customization options.

## Setup
In order to setup the extension you need to install the extension with composer or via the extension manager in TYPO3
- ```composer install surfcamp/portfolio```
- ...

## Content Elements
The portfolio provides a set of often used content elements for portfolio pages in order to present projects, skills, career path, etc on the portfolio website.

- **Introduction Card:** The Introduction Card CE can be used on the homepage to present a quick teaser, an optional image and details to the information as well as a link to more details about yorself

- **Services**: The Services CE allows a presentation of your services in a card style including a name and a short description for every service.

- **Resume**: The Resume CE can be used for providing details about your career path and allows to add resume items for two categories (suggestion: education and work experience) including position, location, institution (school or company), description and a time period

- **Skill Display**: The Skill Display CE allows presenting all skills you can provide including a name, description and a progress level for every skill. According to the progress level a progress bar can be shown, but this is optional.

- **Client Logos**: The Client Logos CE can be used for listing client logos in a structured way to show for which companies or organisation you have already worked. Each client includes a logo and a title.

- **Project List**: The project list displays all project from a specific folder (you need to create projects first in order to use this CE successfully). All projects are displayed in a simple list view. A project includes a title, description, optional one or more links and optional one or more images as well as an option if a detail page should be shown or not.

- **Project Teaser**: The project teaser shows three projects from the listing and provides a link to the projects list.


## Portfolio Configuration & Styling
As soon as the setup is done, the portfolio can be adapted to your personal style and needs, this can be done by some basic configurations.

### Example: Theme
The portfolio provides two themes: 
- dark mode
- light mode

You can change the theme in the settings with ```style.data.theme```. In the following table all options are shown.

| Identifier    | Description                 | Default  | Possible Options             |
|---------------|-----------------------------|----------|------------------------------|
| ```style.data.theme.value``` | For defining the base theme of the whole website and all content elements |```dark```|```dark```, ```light```|
|```style.variables.primaryColor.value```|For defining the primary color used for buttons and links|```#ff854d```|all hex color values|
|```style.variables.secondaryColor.value```|For defining the hover color and accent elements|```#ff854d```|all hex color values|
|```style.data.buttonBorderRadius.value```|For defining the corner styles of buttons, cards and icons|```none```|```non```, ```rounded```, ```round```|

## Socials

