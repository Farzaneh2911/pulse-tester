# Pulse Tester - Custom WordPress Theme

A custom WordPress theme developed for Pulse Creative's coding assessment. This theme recreates a pixel-perfect design from a provided PSD file, featuring a responsive layout, smooth animations, and modern web standards.

## 📋 Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [File Structure](#file-structure)
- [Installation](#installation)
- [Author](#author)

---

## Overview

This WordPress theme was built to match a PSD design for the A&M Taxand Global Conference 2018 landing page. The implementation focuses on:

- Pixel-perfect recreation of the PSD design
- Fully responsive layout across all device sizes
- Smooth scroll animations and transitions
- Clean, maintainable code structure
- WordPress best practices

---

## Features

### 🎨 Design Implementation
- Pixel-perfect layout matching the 1420px PSD container
- Custom typography using Helvetica Neue LT Std font family
- Brand color palette implementation (#3585b7, #00355f, #cad100)
- CSS blend modes for overlay effects (multiply blend on circles)

### 📱 Responsive Design
- Mobile-responsive
- Hamburger navigation menu for mobile devices
- Fluid typography and spacing
- Touch-friendly interactive elements

### ✨ Animations & Interactions
- Hero section entrance animations (circles scale in, text fades up)
- Rotating wheel graphic in "What We Do" section
- Scroll-triggered fade-in animations for sections
- Animated tagline text rotation
- Bouncing scroll indicator arrow
- Smooth scroll navigation

### 🔧 Technical Features
- Clean WordPress template structure
- Tailwind CSS CDN integration
- Custom CSS for PSD-specific measurements
- Vanilla JavaScript (no jQuery dependency)


---

## Technologies Used

| WordPress 
| PHP
| Tailwind CSS 
| Custom CSS 
| JS | Animations & interactions |
| HTML5 
| CSS3 

---

## File Structure

```
pulse-tester/
├── assets/
│   ├── fonts/
│   │   └── Helvetica Neue LT Std/
│   │       ├── HelveticaNeueLTStd-Bd.otf
│   │       ├── HelveticaNeueLTStd-Blk.otf
│   │       ├── HelveticaNeueLTStd-Lt.otf
│   │       ├── HelveticaNeueLTStd-LtCn.otf
│   │       ├── HelveticaNeueLTStd-MdCn.otf
│   │       ├── HelveticaNeueLTStd-Roman.otf
│   │       └── HelveticaNeueLTStd-XBlkCn.otf
│   ├── img/
│   │   ├── logo-top.png
│   │   ├── logo-top-right.png
│   │   ├── logo-bottom.png
│   │   ├── Global-icon.png
│   │   ├── wheel.png
│   │   ├── background-bottom.jpg
│   │   ├── linkedIn.svg
│   │   ├── facebook.svg
│   │   ├── Twitter.svg
│   │   └── YouTube.svg
│   ├── video/
│   │   └── amtax.mp4
│   └── js/
│       └── main.js
├── header.php
├── footer.php
├── page-pulse-tester.php
├── functions.php
├── style.css
└── README.md
```

---

## Installation

### Prerequisites
- WordPress 5.0 or higher
- PHP 7.4 or higher


### Steps

1. **Download the theme**
   ```bash
   # Clone or download the theme files
   ```

2. **Upload to WordPress**
   - Navigate to `wp-content/themes/`
   - Create a folder named `pulse-tester`
   - Upload all theme files to this folder

3. **Activate the theme**
   - Go to WordPress Admin → Appearance → Themes
   - Find "Pulse Tester" and click "Activate"

4. **Create the page**
   - Go to Pages → Add New
   - Title: "Pulse Tester" (or any preferred title)
   - In Page Attributes, select Template: "Pulse Tester"
   - Publish the page

5. **Set as homepage (optional)**
   - Go to Settings → Reading
   - Select "A static page"
   - Choose your Pulse Tester page as the homepage

---


## Author

**Farzaneh Haghighat Bin**

Developed as part of Pulse Creative coding assessment.

---

## License

This theme is proprietary and developed specifically for the Pulse Creative coding test. All rights reserved.

---

*Last Updated: November 2024*