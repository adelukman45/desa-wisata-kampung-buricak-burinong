{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>
      Property &mdash; Free Bootstrap 5 Website Template by Untree.co
    </title> --}}

    <style>

:root {
  --bs-blue: #0d6efd;
  --bs-indigo: #6610f2;
  --bs-purple: #6f42c1;
  --bs-pink: #d63384;
  --bs-red: #dc3545;
  --bs-orange: #fd7e14;
  --bs-yellow: #ffc107;
  --bs-green: #198754;
  --bs-teal: #20c997;
  --bs-cyan: #0dcaf0;
  --bs-white: #fff;
  --bs-gray: #6c757d;
  --bs-gray-dark: #343a40;
  --bs-gray-100: #f8f9fa;
  --bs-gray-200: #e9ecef;
  --bs-gray-300: #dee2e6;
  --bs-gray-400: #ced4da;
  --bs-gray-500: #adb5bd;
  --bs-gray-600: #6c757d;
  --bs-gray-700: #495057;
  --bs-gray-800: #343a40;
  --bs-gray-900: #212529;
  --bs-primary: #00204a;
  --bs-secondary: #005555;
  --bs-success: #198754;
  --bs-info: #0dcaf0;
  --bs-warning: #ffc107;
  --bs-danger: #dc3545;
  --bs-light: #f8f9fa;
  --bs-dark: #212529;
  --bs-primary-rgb: 0, 32, 74;
  --bs-secondary-rgb: 0, 85, 85;
  --bs-success-rgb: 25, 135, 84;
  --bs-info-rgb: 13, 202, 240;
  --bs-warning-rgb: 255, 193, 7;
  --bs-danger-rgb: 220, 53, 69;
  --bs-light-rgb: 248, 249, 250;
  --bs-dark-rgb: 33, 37, 41;
  --bs-white-rgb: 255, 255, 255;
  --bs-black-rgb: 0, 0, 0;
  --bs-body-color-rgb: 33, 37, 41;
  --bs-body-bg-rgb: 255, 255, 255;
  --bs-font-sans-serif: "Work Sans", sans-serif;
  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --bs-body-font-family: var(--bs-font-sans-serif);
  --bs-body-font-size: 1rem;
  --bs-body-font-weight: 400;
  --bs-body-line-height: 1.5;
  --bs-body-color: #212529;
  --bs-body-bg: #fff; }

*,
*::before,
*::after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box; }

@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth; } }

body {
  margin: 0;
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  background-color: var(--bs-body-bg);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

hr {
  margin: 1rem 0;
  color: inherit;
  background-color: currentColor;
  border: 0;
  opacity: 0.25; }

hr:not([size]) {
  height: 1px; }

h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2; }

h1, .h1 {
  font-size: calc(1.375rem + 1.5vw); }
  @media (min-width: 1200px) {
    h1, .h1 {
      font-size: 2.5rem; } }

h2, .h2 {
  font-size: calc(1.325rem + 0.9vw); }
  @media (min-width: 1200px) {
    h2, .h2 {
      font-size: 2rem; } }

h3, .h3 {
  font-size: calc(1.3rem + 0.6vw); }
  @media (min-width: 1200px) {
    h3, .h3 {
      font-size: 1.75rem; } }

h4, .h4 {
  font-size: calc(1.275rem + 0.3vw); }
  @media (min-width: 1200px) {
    h4, .h4 {
      font-size: 1.5rem; } }

h5, .h5 {
  font-size: 1.25rem; }

h6, .h6 {
  font-size: 1rem; }

p {
  margin-top: 0;
  margin-bottom: 1rem; }

abbr[title],
abbr[data-bs-original-title] {
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  text-decoration-skip-ink: none; }

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit; }

ol,
ul {
  padding-left: 2rem; }

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem; }

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0; }

dt {
  font-weight: 700; }

dd {
  margin-bottom: .5rem;
  margin-left: 0; }

blockquote {
  margin: 0 0 1rem; }

b,
strong {
  font-weight: bolder; }

small, .small {
  font-size: 0.875em; }

mark, .mark {
  padding: 0.2em;
  background-color: #fcf8e3; }

sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline; }

sub {
  bottom: -.25em; }

sup {
  top: -.5em; }

a {
  color: #00204a;
  text-decoration: underline; }
  a:hover {
    color: #001a3b; }

a:not([href]):not([class]), a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none; }

pre,
code,
kbd,
samp {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
  direction: ltr /* rtl:ignore */;
  unicode-bidi: bidi-override; }

pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 0.875em; }
  pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal; }

code {
  font-size: 0.875em;
  color: #d63384;
  word-wrap: break-word; }
  a > code {
    color: inherit; }

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 0.875em;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem; }
  kbd kbd {
    padding: 0;
    font-size: 1em;
    font-weight: 700; }

figure {
  margin: 0 0 1rem; }

img,
svg {
  vertical-align: middle; }

table {
  caption-side: bottom;
  border-collapse: collapse; }

caption {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  color: #6c757d;
  text-align: left; }

th {
  text-align: inherit;
  text-align: -webkit-match-parent; }

thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0; }

label {
  display: inline-block; }

button {
  border-radius: 0; }

button:focus:not(:focus-visible) {
  outline: 0; }

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

button,
select {
  text-transform: none; }

[role="button"] {
  cursor: pointer; }

select {
  word-wrap: normal; }
  select:disabled {
    opacity: 1; }

[list]::-webkit-calendar-picker-indicator {
  display: none; }

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button; }
  button:not(:disabled),
  [type="button"]:not(:disabled),
  [type="reset"]:not(:disabled),
  [type="submit"]:not(:disabled) {
    cursor: pointer; }

::-moz-focus-inner {
  padding: 0;
  border-style: none; }

textarea {
  resize: vertical; }

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0; }

legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit; }
  @media (min-width: 1200px) {
    legend {
      font-size: 1.5rem; } }
  legend + * {
    clear: left; }

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0; }

::-webkit-inner-spin-button {
  height: auto; }

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: textfield; }

/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none; }

::-webkit-color-swatch-wrapper {
  padding: 0; }

::file-selector-button {
  font: inherit; }

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button; }

output {
  display: inline-block; }

iframe {
  border: 0; }

summary {
  display: list-item;
  cursor: pointer; }

progress {
  vertical-align: baseline; }

[hidden] {
  display: none !important; }

.lead {
  font-size: 1.25rem;
  font-weight: 300; }

.display-1 {
  font-size: calc(1.625rem + 4.5vw);
  font-weight: 300;
  line-height: 1.2; }
  @media (min-width: 1200px) {
    .display-1 {
      font-size: 5rem; } }

.display-2 {
  font-size: calc(1.575rem + 3.9vw);
  font-weight: 300;
  line-height: 1.2; }
  @media (min-width: 1200px) {
    .display-2 {
      font-size: 4.5rem; } }

.display-3 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 300;
  line-height: 1.2; }
  @media (min-width: 1200px) {
    .display-3 {
      font-size: 4rem; } }

.display-4 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 300;
  line-height: 1.2; }
  @media (min-width: 1200px) {
    .display-4 {
      font-size: 3.5rem; } }

.display-5 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 300;
  line-height: 1.2; }
  @media (min-width: 1200px) {
    .display-5 {
      font-size: 3rem; } }

.display-6 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 300;
  line-height: 1.2; }
  @media (min-width: 1200px) {
    .display-6 {
      font-size: 2.5rem; } }

.list-unstyled {
  padding-left: 0;
  list-style: none; }

.list-inline {
  padding-left: 0;
  list-style: none; }

.list-inline-item {
  display: inline-block; }
  .list-inline-item:not(:last-child) {
    margin-right: 0.5rem; }

.initialism {
  font-size: 0.875em;
  text-transform: uppercase; }

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem; }
  .blockquote > :last-child {
    margin-bottom: 0; }

.blockquote-footer {
  margin-top: -1rem;
  margin-bottom: 1rem;
  font-size: 0.875em;
  color: #6c757d; }
  .blockquote-footer::before {
    content: "\2014\00A0"; }

.img-fluid {
  max-width: 100%;
  height: auto; }

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto; }

.figure {
  display: inline-block; }

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1; }

.figure-caption {
  font-size: 0.875em;
  color: #6c757d; }

.container,
.container-fluid,
.container-sm,
.container-md,
.container-lg,
.container-xl,
.container-xxl {
  width: 100%;
  padding-right: var(--bs-gutter-x, 0.75rem);
  padding-left: var(--bs-gutter-x, 0.75rem);
  margin-right: auto;
  margin-left: auto; }

@media (min-width: 576px) {
  .container, .container-sm {
    max-width: 540px; } }

@media (min-width: 768px) {
  .container, .container-sm, .container-md {
    max-width: 720px; } }

@media (min-width: 992px) {
  .container, .container-sm, .container-md, .container-lg {
    max-width: 960px; } }

@media (min-width: 1200px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1140px; } }

@media (min-width: 1400px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
    max-width: 1320px; } }

.row {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-top: calc(-1 * var(--bs-gutter-y));
  margin-right: calc(-.5 * var(--bs-gutter-x));
  margin-left: calc(-.5 * var(--bs-gutter-x)); }
  .row > * {
    -ms-flex-negative: 0;
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
    margin-top: var(--bs-gutter-y); }

.col {
  -webkit-box-flex: 1;
  -ms-flex: 1 0 0%;
  flex: 1 0 0%; }

.row-cols-auto > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto; }

.row-cols-1 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 100%; }

.row-cols-2 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 50%; }

.row-cols-3 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 33.33333%; }

.row-cols-4 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 25%; }

.row-cols-5 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 20%; }

.row-cols-6 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 16.66667%; }

.col-auto {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto; }

.col-1 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 8.33333%; }

.col-2 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 16.66667%; }

.col-3 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 25%; }

.col-4 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 33.33333%; }

.col-5 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 41.66667%; }

.col-6 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 50%; }

.col-7 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 58.33333%; }

.col-8 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 66.66667%; }

.col-9 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 75%; }

.col-10 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 83.33333%; }

.col-11 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 91.66667%; }

.col-12 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 100%; }

.offset-1 {
  margin-left: 8.33333%; }

.offset-2 {
  margin-left: 16.66667%; }

.offset-3 {
  margin-left: 25%; }

.offset-4 {
  margin-left: 33.33333%; }

.offset-5 {
  margin-left: 41.66667%; }

.offset-6 {
  margin-left: 50%; }

.offset-7 {
  margin-left: 58.33333%; }

.offset-8 {
  margin-left: 66.66667%; }

.offset-9 {
  margin-left: 75%; }

.offset-10 {
  margin-left: 83.33333%; }

.offset-11 {
  margin-left: 91.66667%; }

.g-0,
.gx-0 {
  --bs-gutter-x: 0; }

.g-0,
.gy-0 {
  --bs-gutter-y: 0; }

.g-1,
.gx-1 {
  --bs-gutter-x: 0.25rem; }

.g-1,
.gy-1 {
  --bs-gutter-y: 0.25rem; }

.g-2,
.gx-2 {
  --bs-gutter-x: 0.5rem; }

.g-2,
.gy-2 {
  --bs-gutter-y: 0.5rem; }

.g-3,
.gx-3 {
  --bs-gutter-x: 1rem; }

.g-3,
.gy-3 {
  --bs-gutter-y: 1rem; }

.g-4,
.gx-4 {
  --bs-gutter-x: 1.5rem; }

.g-4,
.gy-4 {
  --bs-gutter-y: 1.5rem; }

.g-5,
.gx-5 {
  --bs-gutter-x: 3rem; }

.g-5,
.gy-5 {
  --bs-gutter-y: 3rem; }

@media (min-width: 576px) {
  .col-sm {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%; }
  .row-cols-sm-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .row-cols-sm-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .row-cols-sm-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .row-cols-sm-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .row-cols-sm-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .row-cols-sm-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%; }
  .row-cols-sm-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-sm-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .col-sm-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333%; }
  .col-sm-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-sm-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .col-sm-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .col-sm-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66667%; }
  .col-sm-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .col-sm-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333%; }
  .col-sm-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66667%; }
  .col-sm-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%; }
  .col-sm-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333%; }
  .col-sm-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66667%; }
  .col-sm-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .offset-sm-0 {
    margin-left: 0; }
  .offset-sm-1 {
    margin-left: 8.33333%; }
  .offset-sm-2 {
    margin-left: 16.66667%; }
  .offset-sm-3 {
    margin-left: 25%; }
  .offset-sm-4 {
    margin-left: 33.33333%; }
  .offset-sm-5 {
    margin-left: 41.66667%; }
  .offset-sm-6 {
    margin-left: 50%; }
  .offset-sm-7 {
    margin-left: 58.33333%; }
  .offset-sm-8 {
    margin-left: 66.66667%; }
  .offset-sm-9 {
    margin-left: 75%; }
  .offset-sm-10 {
    margin-left: 83.33333%; }
  .offset-sm-11 {
    margin-left: 91.66667%; }
  .g-sm-0,
  .gx-sm-0 {
    --bs-gutter-x: 0; }
  .g-sm-0,
  .gy-sm-0 {
    --bs-gutter-y: 0; }
  .g-sm-1,
  .gx-sm-1 {
    --bs-gutter-x: 0.25rem; }
  .g-sm-1,
  .gy-sm-1 {
    --bs-gutter-y: 0.25rem; }
  .g-sm-2,
  .gx-sm-2 {
    --bs-gutter-x: 0.5rem; }
  .g-sm-2,
  .gy-sm-2 {
    --bs-gutter-y: 0.5rem; }
  .g-sm-3,
  .gx-sm-3 {
    --bs-gutter-x: 1rem; }
  .g-sm-3,
  .gy-sm-3 {
    --bs-gutter-y: 1rem; }
  .g-sm-4,
  .gx-sm-4 {
    --bs-gutter-x: 1.5rem; }
  .g-sm-4,
  .gy-sm-4 {
    --bs-gutter-y: 1.5rem; }
  .g-sm-5,
  .gx-sm-5 {
    --bs-gutter-x: 3rem; }
  .g-sm-5,
  .gy-sm-5 {
    --bs-gutter-y: 3rem; } }

@media (min-width: 768px) {
  .col-md {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%; }
  .row-cols-md-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .row-cols-md-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .row-cols-md-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .row-cols-md-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .row-cols-md-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .row-cols-md-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%; }
  .row-cols-md-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-md-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .col-md-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333%; }
  .col-md-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-md-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .col-md-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .col-md-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66667%; }
  .col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .col-md-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333%; }
  .col-md-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66667%; }
  .col-md-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%; }
  .col-md-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333%; }
  .col-md-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66667%; }
  .col-md-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .offset-md-0 {
    margin-left: 0; }
  .offset-md-1 {
    margin-left: 8.33333%; }
  .offset-md-2 {
    margin-left: 16.66667%; }
  .offset-md-3 {
    margin-left: 25%; }
  .offset-md-4 {
    margin-left: 33.33333%; }
  .offset-md-5 {
    margin-left: 41.66667%; }
  .offset-md-6 {
    margin-left: 50%; }
  .offset-md-7 {
    margin-left: 58.33333%; }
  .offset-md-8 {
    margin-left: 66.66667%; }
  .offset-md-9 {
    margin-left: 75%; }
  .offset-md-10 {
    margin-left: 83.33333%; }
  .offset-md-11 {
    margin-left: 91.66667%; }
  .g-md-0,
  .gx-md-0 {
    --bs-gutter-x: 0; }
  .g-md-0,
  .gy-md-0 {
    --bs-gutter-y: 0; }
  .g-md-1,
  .gx-md-1 {
    --bs-gutter-x: 0.25rem; }
  .g-md-1,
  .gy-md-1 {
    --bs-gutter-y: 0.25rem; }
  .g-md-2,
  .gx-md-2 {
    --bs-gutter-x: 0.5rem; }
  .g-md-2,
  .gy-md-2 {
    --bs-gutter-y: 0.5rem; }
  .g-md-3,
  .gx-md-3 {
    --bs-gutter-x: 1rem; }
  .g-md-3,
  .gy-md-3 {
    --bs-gutter-y: 1rem; }
  .g-md-4,
  .gx-md-4 {
    --bs-gutter-x: 1.5rem; }
  .g-md-4,
  .gy-md-4 {
    --bs-gutter-y: 1.5rem; }
  .g-md-5,
  .gx-md-5 {
    --bs-gutter-x: 3rem; }
  .g-md-5,
  .gy-md-5 {
    --bs-gutter-y: 3rem; } }

@media (min-width: 992px) {
  .col-lg {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%; }
  .row-cols-lg-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .row-cols-lg-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .row-cols-lg-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .row-cols-lg-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .row-cols-lg-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .row-cols-lg-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%; }
  .row-cols-lg-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-lg-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .col-lg-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333%; }
  .col-lg-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-lg-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .col-lg-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .col-lg-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66667%; }
  .col-lg-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .col-lg-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333%; }
  .col-lg-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66667%; }
  .col-lg-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%; }
  .col-lg-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333%; }
  .col-lg-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66667%; }
  .col-lg-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .offset-lg-0 {
    margin-left: 0; }
  .offset-lg-1 {
    margin-left: 8.33333%; }
  .offset-lg-2 {
    margin-left: 16.66667%; }
  .offset-lg-3 {
    margin-left: 25%; }
  .offset-lg-4 {
    margin-left: 33.33333%; }
  .offset-lg-5 {
    margin-left: 41.66667%; }
  .offset-lg-6 {
    margin-left: 50%; }
  .offset-lg-7 {
    margin-left: 58.33333%; }
  .offset-lg-8 {
    margin-left: 66.66667%; }
  .offset-lg-9 {
    margin-left: 75%; }
  .offset-lg-10 {
    margin-left: 83.33333%; }
  .offset-lg-11 {
    margin-left: 91.66667%; }
  .g-lg-0,
  .gx-lg-0 {
    --bs-gutter-x: 0; }
  .g-lg-0,
  .gy-lg-0 {
    --bs-gutter-y: 0; }
  .g-lg-1,
  .gx-lg-1 {
    --bs-gutter-x: 0.25rem; }
  .g-lg-1,
  .gy-lg-1 {
    --bs-gutter-y: 0.25rem; }
  .g-lg-2,
  .gx-lg-2 {
    --bs-gutter-x: 0.5rem; }
  .g-lg-2,
  .gy-lg-2 {
    --bs-gutter-y: 0.5rem; }
  .g-lg-3,
  .gx-lg-3 {
    --bs-gutter-x: 1rem; }
  .g-lg-3,
  .gy-lg-3 {
    --bs-gutter-y: 1rem; }
  .g-lg-4,
  .gx-lg-4 {
    --bs-gutter-x: 1.5rem; }
  .g-lg-4,
  .gy-lg-4 {
    --bs-gutter-y: 1.5rem; }
  .g-lg-5,
  .gx-lg-5 {
    --bs-gutter-x: 3rem; }
  .g-lg-5,
  .gy-lg-5 {
    --bs-gutter-y: 3rem; } }

@media (min-width: 1200px) {
  .col-xl {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%; }
  .row-cols-xl-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .row-cols-xl-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .row-cols-xl-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .row-cols-xl-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .row-cols-xl-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .row-cols-xl-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%; }
  .row-cols-xl-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-xl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .col-xl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333%; }
  .col-xl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-xl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .col-xl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .col-xl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66667%; }
  .col-xl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .col-xl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333%; }
  .col-xl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66667%; }
  .col-xl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%; }
  .col-xl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333%; }
  .col-xl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66667%; }
  .col-xl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .offset-xl-0 {
    margin-left: 0; }
  .offset-xl-1 {
    margin-left: 8.33333%; }
  .offset-xl-2 {
    margin-left: 16.66667%; }
  .offset-xl-3 {
    margin-left: 25%; }
  .offset-xl-4 {
    margin-left: 33.33333%; }
  .offset-xl-5 {
    margin-left: 41.66667%; }
  .offset-xl-6 {
    margin-left: 50%; }
  .offset-xl-7 {
    margin-left: 58.33333%; }
  .offset-xl-8 {
    margin-left: 66.66667%; }
  .offset-xl-9 {
    margin-left: 75%; }
  .offset-xl-10 {
    margin-left: 83.33333%; }
  .offset-xl-11 {
    margin-left: 91.66667%; }
  .g-xl-0,
  .gx-xl-0 {
    --bs-gutter-x: 0; }
  .g-xl-0,
  .gy-xl-0 {
    --bs-gutter-y: 0; }
  .g-xl-1,
  .gx-xl-1 {
    --bs-gutter-x: 0.25rem; }
  .g-xl-1,
  .gy-xl-1 {
    --bs-gutter-y: 0.25rem; }
  .g-xl-2,
  .gx-xl-2 {
    --bs-gutter-x: 0.5rem; }
  .g-xl-2,
  .gy-xl-2 {
    --bs-gutter-y: 0.5rem; }
  .g-xl-3,
  .gx-xl-3 {
    --bs-gutter-x: 1rem; }
  .g-xl-3,
  .gy-xl-3 {
    --bs-gutter-y: 1rem; }
  .g-xl-4,
  .gx-xl-4 {
    --bs-gutter-x: 1.5rem; }
  .g-xl-4,
  .gy-xl-4 {
    --bs-gutter-y: 1.5rem; }
  .g-xl-5,
  .gx-xl-5 {
    --bs-gutter-x: 3rem; }
  .g-xl-5,
  .gy-xl-5 {
    --bs-gutter-y: 3rem; } }

@media (min-width: 1400px) {
  .col-xxl {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%; }
  .row-cols-xxl-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .row-cols-xxl-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .row-cols-xxl-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .row-cols-xxl-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .row-cols-xxl-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .row-cols-xxl-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%; }
  .row-cols-xxl-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-xxl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .col-xxl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333%; }
  .col-xxl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-xxl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .col-xxl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .col-xxl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66667%; }
  .col-xxl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .col-xxl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333%; }
  .col-xxl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66667%; }
  .col-xxl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%; }
  .col-xxl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333%; }
  .col-xxl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66667%; }
  .col-xxl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .offset-xxl-0 {
    margin-left: 0; }
  .offset-xxl-1 {
    margin-left: 8.33333%; }
  .offset-xxl-2 {
    margin-left: 16.66667%; }
  .offset-xxl-3 {
    margin-left: 25%; }
  .offset-xxl-4 {
    margin-left: 33.33333%; }
  .offset-xxl-5 {
    margin-left: 41.66667%; }
  .offset-xxl-6 {
    margin-left: 50%; }
  .offset-xxl-7 {
    margin-left: 58.33333%; }
  .offset-xxl-8 {
    margin-left: 66.66667%; }
  .offset-xxl-9 {
    margin-left: 75%; }
  .offset-xxl-10 {
    margin-left: 83.33333%; }
  .offset-xxl-11 {
    margin-left: 91.66667%; }
  .g-xxl-0,
  .gx-xxl-0 {
    --bs-gutter-x: 0; }
  .g-xxl-0,
  .gy-xxl-0 {
    --bs-gutter-y: 0; }
  .g-xxl-1,
  .gx-xxl-1 {
    --bs-gutter-x: 0.25rem; }
  .g-xxl-1,
  .gy-xxl-1 {
    --bs-gutter-y: 0.25rem; }
  .g-xxl-2,
  .gx-xxl-2 {
    --bs-gutter-x: 0.5rem; }
  .g-xxl-2,
  .gy-xxl-2 {
    --bs-gutter-y: 0.5rem; }
  .g-xxl-3,
  .gx-xxl-3 {
    --bs-gutter-x: 1rem; }
  .g-xxl-3,
  .gy-xxl-3 {
    --bs-gutter-y: 1rem; }
  .g-xxl-4,
  .gx-xxl-4 {
    --bs-gutter-x: 1.5rem; }
  .g-xxl-4,
  .gy-xxl-4 {
    --bs-gutter-y: 1.5rem; }
  .g-xxl-5,
  .gx-xxl-5 {
    --bs-gutter-x: 3rem; }
  .g-xxl-5,
  .gy-xxl-5 {
    --bs-gutter-y: 3rem; } }

.table {
  --bs-table-bg: transparent;
  --bs-table-accent-bg: transparent;
  --bs-table-striped-color: #212529;
  --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
  --bs-table-active-color: #212529;
  --bs-table-active-bg: rgba(0, 0, 0, 0.1);
  --bs-table-hover-color: #212529;
  --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
  vertical-align: top;
  border-color: #dee2e6; }
  .table > :not(caption) > * > * {
    padding: 0.5rem 0.5rem;
    background-color: var(--bs-table-bg);
    border-bottom-width: 1px;
    -webkit-box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
    box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); }
  .table > tbody {
    vertical-align: inherit; }
  .table > thead {
    vertical-align: bottom; }
  .table > :not(:first-child) {
    border-top: 2px solid currentColor; }

.caption-top {
  caption-side: top; }

.table-sm > :not(caption) > * > * {
  padding: 0.25rem 0.25rem; }

.table-bordered > :not(caption) > * {
  border-width: 1px 0; }
  .table-bordered > :not(caption) > * > * {
    border-width: 0 1px; }

.table-borderless > :not(caption) > * > * {
  border-bottom-width: 0; }

.table-borderless > :not(:first-child) {
  border-top-width: 0; }

.table-striped > tbody > tr:nth-of-type(odd) > * {
  --bs-table-accent-bg: var(--bs-table-striped-bg);
  color: var(--bs-table-striped-color); }

.table-active {
  --bs-table-accent-bg: var(--bs-table-active-bg);
  color: var(--bs-table-active-color); }

.table-hover > tbody > tr:hover > * {
  --bs-table-accent-bg: var(--bs-table-hover-bg);
  color: var(--bs-table-hover-color); }

.table-primary {
  --bs-table-bg: #ccd2db;
  --bs-table-striped-bg: #c2c8d0;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #b8bdc5;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #bdc2cb;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #b8bdc5; }

.table-secondary {
  --bs-table-bg: #ccdddd;
  --bs-table-striped-bg: #c2d2d2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #b8c7c7;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #bdcccc;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #b8c7c7; }

.table-success {
  --bs-table-bg: #d1e7dd;
  --bs-table-striped-bg: #c7dbd2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #bcd0c7;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #c1d6cc;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #bcd0c7; }

.table-info {
  --bs-table-bg: #cff4fc;
  --bs-table-striped-bg: #c5e8ef;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #badce3;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #bfe2e9;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #badce3; }

.table-warning {
  --bs-table-bg: #fff3cd;
  --bs-table-striped-bg: #f2e7c3;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #e6dbb9;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #ece1be;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #e6dbb9; }

.table-danger {
  --bs-table-bg: #f8d7da;
  --bs-table-striped-bg: #eccccf;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #dfc2c4;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e5c7ca;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #dfc2c4; }

.table-light {
  --bs-table-bg: #f8f9fa;
  --bs-table-striped-bg: #ecedee;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #dfe0e1;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e5e6e7;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #dfe0e1; }

.table-dark {
  --bs-table-bg: #212529;
  --bs-table-striped-bg: #2c3034;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: #373b3e;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #323539;
  --bs-table-hover-color: #fff;
  color: #fff;
  border-color: #373b3e; }

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch; }

@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; } }

@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; } }

@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; } }

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; } }

@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; } }

.form-label {
  margin-bottom: 0.5rem; }

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5; }

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.25rem; }

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem; }

.form-text {
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #6c757d; }

.form-control {
  display: block;
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border-radius: 0.25rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .form-control {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .form-control[type="file"] {
    overflow: hidden; }
    .form-control[type="file"]:not(:disabled):not([readonly]) {
      cursor: pointer; }
  .form-control:focus {
    color: #212529;
    background-color: #fff;
    border-color: #8090a5;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.25); }
  .form-control::-webkit-date-and-time-value {
    height: 1.5em; }
  .form-control::-webkit-input-placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control:-ms-input-placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control::-ms-input-placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control::placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control:disabled, .form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1; }
  .form-control::file-selector-button {
    padding: 0.375rem 0.75rem;
    margin: -0.375rem -0.75rem;
    -webkit-margin-end: 0.75rem;
    margin-inline-end: 0.75rem;
    color: #212529;
    background-color: #e9ecef;
    pointer-events: none;
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    border-inline-end-width: 1px;
    border-radius: 0;
    -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
      .form-control::file-selector-button {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
  .form-control:hover:not(:disabled):not([readonly])::file-selector-button {
    background-color: #dde0e3; }
  .form-control::-webkit-file-upload-button {
    padding: 0.375rem 0.75rem;
    margin: -0.375rem -0.75rem;
    -webkit-margin-end: 0.75rem;
    margin-inline-end: 0.75rem;
    color: #212529;
    background-color: #e9ecef;
    pointer-events: none;
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    border-inline-end-width: 1px;
    border-radius: 0;
    -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
      .form-control::-webkit-file-upload-button {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
  .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
    background-color: #dde0e3; }

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.375rem 0;
  margin-bottom: 0;
  line-height: 1.5;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0; }
  .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0; }

.form-control-sm {
  min-height: calc(1.5em + 0.5rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  border-radius: 0.2rem; }
  .form-control-sm::file-selector-button {
    padding: 0.25rem 0.5rem;
    margin: -0.25rem -0.5rem;
    -webkit-margin-end: 0.5rem;
    margin-inline-end: 0.5rem; }
  .form-control-sm::-webkit-file-upload-button {
    padding: 0.25rem 0.5rem;
    margin: -0.25rem -0.5rem;
    -webkit-margin-end: 0.5rem;
    margin-inline-end: 0.5rem; }

.form-control-lg {
  min-height: calc(1.5em + 1rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  border-radius: 0.3rem; }
  .form-control-lg::file-selector-button {
    padding: 0.5rem 1rem;
    margin: -0.5rem -1rem;
    -webkit-margin-end: 1rem;
    margin-inline-end: 1rem; }
  .form-control-lg::-webkit-file-upload-button {
    padding: 0.5rem 1rem;
    margin: -0.5rem -1rem;
    -webkit-margin-end: 1rem;
    margin-inline-end: 1rem; }

textarea.form-control {
  min-height: calc(1.5em + 0.75rem + 2px); }

textarea.form-control-sm {
  min-height: calc(1.5em + 0.5rem + 2px); }

textarea.form-control-lg {
  min-height: calc(1.5em + 1rem + 2px); }

.form-control-color {
  width: 3rem;
  height: auto;
  padding: 0.375rem; }
  .form-control-color:not(:disabled):not([readonly]) {
    cursor: pointer; }
  .form-control-color::-moz-color-swatch {
    height: 1.5em;
    border-radius: 0.25rem; }
  .form-control-color::-webkit-color-swatch {
    height: 1.5em;
    border-radius: 0.25rem; }

.form-select {
  display: block;
  width: 100%;
  padding: 0.375rem 2.25rem 0.375rem 0.75rem;
  -moz-padding-start: calc(0.75rem - 3px);
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  background-color: #fff;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 16px 12px;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }
  @media (prefers-reduced-motion: reduce) {
    .form-select {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .form-select:focus {
    border-color: #8090a5;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.25); }
  .form-select[multiple], .form-select[size]:not([size="1"]) {
    padding-right: 0.75rem;
    background-image: none; }
  .form-select:disabled {
    background-color: #e9ecef; }
  .form-select:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #212529; }

.form-select-sm {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.875rem;
  border-radius: 0.2rem; }

.form-select-lg {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.25rem;
  border-radius: 0.3rem; }

.form-check {
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5em;
  margin-bottom: 0.125rem; }
  .form-check .form-check-input {
    float: left;
    margin-left: -1.5em; }

.form-check-input {
  width: 1em;
  height: 1em;
  margin-top: 0.25em;
  vertical-align: top;
  background-color: #fff;
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: 1px solid rgba(0, 0, 0, 0.25);
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  -webkit-print-color-adjust: exact;
  color-adjust: exact; }
  .form-check-input[type="checkbox"] {
    border-radius: 0.25em; }
  .form-check-input[type="radio"] {
    border-radius: 50%; }
  .form-check-input:active {
    -webkit-filter: brightness(90%);
    filter: brightness(90%); }
  .form-check-input:focus {
    border-color: #8090a5;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.25); }
  .form-check-input:checked {
    background-color: #00204a;
    border-color: #00204a; }
    .form-check-input:checked[type="checkbox"] {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e"); }
    .form-check-input:checked[type="radio"] {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e"); }
  .form-check-input[type="checkbox"]:indeterminate {
    background-color: #00204a;
    border-color: #00204a;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e"); }
  .form-check-input:disabled {
    pointer-events: none;
    -webkit-filter: none;
    filter: none;
    opacity: 0.5; }
  .form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
    opacity: 0.5; }

.form-switch {
  padding-left: 2.5em; }
  .form-switch .form-check-input {
    width: 2em;
    margin-left: -2.5em;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
    background-position: left center;
    border-radius: 2em;
    -webkit-transition: background-position 0.15s ease-in-out;
    -o-transition: background-position 0.15s ease-in-out;
    transition: background-position 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
      .form-switch .form-check-input {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
    .form-switch .form-check-input:focus {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%238090a5'/%3e%3c/svg%3e"); }
    .form-switch .form-check-input:checked {
      background-position: right center;
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e"); }

.form-check-inline {
  display: inline-block;
  margin-right: 1rem; }

.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none; }
  .btn-check[disabled] + .btn, .btn-check:disabled + .btn {
    pointer-events: none;
    -webkit-filter: none;
    filter: none;
    opacity: 0.65; }

.form-range {
  width: 100%;
  height: 1.5rem;
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }
  .form-range:focus {
    outline: 0; }
    .form-range:focus::-webkit-slider-thumb {
      -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(0, 32, 74, 0.25);
      box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(0, 32, 74, 0.25); }
    .form-range:focus::-moz-range-thumb {
      box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(0, 32, 74, 0.25); }
  .form-range::-moz-focus-outer {
    border: 0; }
  .form-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: #00204a;
    border: 0;
    border-radius: 1rem;
    -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -webkit-appearance: none;
    appearance: none; }
    @media (prefers-reduced-motion: reduce) {
      .form-range::-webkit-slider-thumb {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
    .form-range::-webkit-slider-thumb:active {
      background-color: #b3bcc9; }
  .form-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem; }
  .form-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #00204a;
    border: 0;
    border-radius: 1rem;
    -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -moz-appearance: none;
    appearance: none; }
    @media (prefers-reduced-motion: reduce) {
      .form-range::-moz-range-thumb {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
    .form-range::-moz-range-thumb:active {
      background-color: #b3bcc9; }
  .form-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem; }
  .form-range:disabled {
    pointer-events: none; }
    .form-range:disabled::-webkit-slider-thumb {
      background-color: #adb5bd; }
    .form-range:disabled::-moz-range-thumb {
      background-color: #adb5bd; }

.form-floating {
  position: relative; }
  .form-floating > .form-control,
  .form-floating > .form-select {
    height: calc(3.5rem + 2px);
    line-height: 1.25; }
  .form-floating > label {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    padding: 1rem 0.75rem;
    pointer-events: none;
    border: 1px solid transparent;
    -webkit-transform-origin: 0 0;
    -ms-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
    transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
    -o-transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
    transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
    transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
      .form-floating > label {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
  .form-floating > .form-control {
    padding: 1rem 0.75rem; }
    .form-floating > .form-control::-webkit-input-placeholder {
      color: transparent; }
    .form-floating > .form-control:-ms-input-placeholder {
      color: transparent; }
    .form-floating > .form-control::-ms-input-placeholder {
      color: transparent; }
    .form-floating > .form-control::placeholder {
      color: transparent; }
    .form-floating > .form-control:focus, .form-floating > .form-control:not(:placeholder-shown) {
      padding-top: 1.625rem;
      padding-bottom: 0.625rem; }
    .form-floating > .form-control:-webkit-autofill {
      padding-top: 1.625rem;
      padding-bottom: 0.625rem; }
  .form-floating > .form-select {
    padding-top: 1.625rem;
    padding-bottom: 0.625rem; }
  .form-floating > .form-control:focus ~ label,
  .form-floating > .form-control:not(:placeholder-shown) ~ label,
  .form-floating > .form-select ~ label {
    opacity: 0.65;
    -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
    -ms-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem); }
  .form-floating > .form-control:-webkit-autofill ~ label {
    opacity: 0.65;
    -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem); }

.input-group {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
  width: 100%; }
  .input-group > .form-control,
  .input-group > .form-select {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    width: 1%;
    min-width: 0; }
  .input-group > .form-control:focus,
  .input-group > .form-select:focus {
    z-index: 3; }
  .input-group .btn {
    position: relative;
    z-index: 2; }
    .input-group .btn:focus {
      z-index: 3; }

.input-group-text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 0.25rem; }

.input-group-lg > .form-control,
.input-group-lg > .form-select,
.input-group-lg > .input-group-text,
.input-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  border-radius: 0.3rem; }

.input-group-sm > .form-control,
.input-group-sm > .form-select,
.input-group-sm > .input-group-text,
.input-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  border-radius: 0.2rem; }

.input-group-lg > .form-select,
.input-group-sm > .form-select {
  padding-right: 3rem; }

.input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
.input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n + 3) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.input-group.has-validation > :nth-last-child(n + 3):not(.dropdown-toggle):not(.dropdown-menu),
.input-group.has-validation > .dropdown-toggle:nth-last-child(n + 4) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: -1px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #198754; }

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  color: #fff;
  background-color: rgba(25, 135, 84, 0.9);
  border-radius: 0.25rem; }

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .form-control:valid, .form-control.is-valid {
  border-color: #198754;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .form-control:valid:focus, .form-control.is-valid:focus {
    border-color: #198754;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25); }

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem); }

.was-validated .form-select:valid, .form-select.is-valid {
  border-color: #198754; }
  .was-validated .form-select:valid:not([multiple]):not([size]), .was-validated .form-select:valid:not([multiple])[size="1"], .form-select.is-valid:not([multiple]):not([size]), .form-select.is-valid:not([multiple])[size="1"] {
    padding-right: 4.125rem;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
    background-position: right 0.75rem center, center right 2.25rem;
    background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .form-select:valid:focus, .form-select.is-valid:focus {
    border-color: #198754;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25); }

.was-validated .form-check-input:valid, .form-check-input.is-valid {
  border-color: #198754; }
  .was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
    background-color: #198754; }
  .was-validated .form-check-input:valid:focus, .form-check-input.is-valid:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25); }
  .was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
    color: #198754; }

.form-check-inline .form-check-input ~ .valid-feedback {
  margin-left: .5em; }

.was-validated .input-group .form-control:valid, .input-group .form-control.is-valid, .was-validated
.input-group .form-select:valid,
.input-group .form-select.is-valid {
  z-index: 1; }
  .was-validated .input-group .form-control:valid:focus, .input-group .form-control.is-valid:focus, .was-validated
  .input-group .form-select:valid:focus,
  .input-group .form-select.is-valid:focus {
    z-index: 3; }

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #dc3545; }

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.9);
  border-radius: 0.25rem; }

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: #dc3545;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
    border-color: #dc3545;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25); }

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem); }

.was-validated .form-select:invalid, .form-select.is-invalid {
  border-color: #dc3545; }
  .was-validated .form-select:invalid:not([multiple]):not([size]), .was-validated .form-select:invalid:not([multiple])[size="1"], .form-select.is-invalid:not([multiple]):not([size]), .form-select.is-invalid:not([multiple])[size="1"] {
    padding-right: 4.125rem;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
    background-position: right 0.75rem center, center right 2.25rem;
    background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .form-select:invalid:focus, .form-select.is-invalid:focus {
    border-color: #dc3545;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25); }

.was-validated .form-check-input:invalid, .form-check-input.is-invalid {
  border-color: #dc3545; }
  .was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
    background-color: #dc3545; }
  .was-validated .form-check-input:invalid:focus, .form-check-input.is-invalid:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25); }
  .was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
    color: #dc3545; }

.form-check-inline .form-check-input ~ .invalid-feedback {
  margin-left: .5em; }

.was-validated .input-group .form-control:invalid, .input-group .form-control.is-invalid, .was-validated
.input-group .form-select:invalid,
.input-group .form-select.is-invalid {
  z-index: 2; }
  .was-validated .input-group .form-control:invalid:focus, .input-group .form-control.is-invalid:focus, .was-validated
  .input-group .form-select:invalid:focus,
  .input-group .form-select.is-invalid:focus {
    z-index: 3; }

.btn {
  display: inline-block;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: center;
  text-decoration: none;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  border-radius: 0.25rem;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .btn {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .btn:hover {
    color: #212529; }
  .btn-check:focus + .btn, .btn:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.25); }
  .btn:disabled, .btn.disabled,
  fieldset:disabled .btn {
    pointer-events: none;
    opacity: 0.65; }

.btn-primary {
  color: #fff;
  background-color: #00204a;
  border-color: #00204a; }
  .btn-primary:hover {
    color: #fff;
    background-color: #001b3f;
    border-color: #001a3b; }
  .btn-check:focus + .btn-primary, .btn-primary:focus {
    color: #fff;
    background-color: #001b3f;
    border-color: #001a3b;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(38, 65, 101, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(38, 65, 101, 0.5); }
  .btn-check:checked + .btn-primary,
  .btn-check:active + .btn-primary, .btn-primary:active, .btn-primary.active,
  .show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #001a3b;
    border-color: #001838; }
    .btn-check:checked + .btn-primary:focus,
    .btn-check:active + .btn-primary:focus, .btn-primary:active:focus, .btn-primary.active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(38, 65, 101, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(38, 65, 101, 0.5); }
  .btn-primary:disabled, .btn-primary.disabled {
    color: #fff;
    background-color: #00204a;
    border-color: #00204a; }

.btn-secondary {
  color: #fff;
  background-color: #005555;
  border-color: #005555; }
  .btn-secondary:hover {
    color: #fff;
    background-color: #004848;
    border-color: #004444; }
  .btn-check:focus + .btn-secondary, .btn-secondary:focus {
    color: #fff;
    background-color: #004848;
    border-color: #004444;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(38, 111, 111, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(38, 111, 111, 0.5); }
  .btn-check:checked + .btn-secondary,
  .btn-check:active + .btn-secondary, .btn-secondary:active, .btn-secondary.active,
  .show > .btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #004444;
    border-color: #004040; }
    .btn-check:checked + .btn-secondary:focus,
    .btn-check:active + .btn-secondary:focus, .btn-secondary:active:focus, .btn-secondary.active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(38, 111, 111, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(38, 111, 111, 0.5); }
  .btn-secondary:disabled, .btn-secondary.disabled {
    color: #fff;
    background-color: #005555;
    border-color: #005555; }

.btn-success {
  color: #fff;
  background-color: #198754;
  border-color: #198754; }
  .btn-success:hover {
    color: #fff;
    background-color: #157347;
    border-color: #146c43; }
  .btn-check:focus + .btn-success, .btn-success:focus {
    color: #fff;
    background-color: #157347;
    border-color: #146c43;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(60, 153, 110, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(60, 153, 110, 0.5); }
  .btn-check:checked + .btn-success,
  .btn-check:active + .btn-success, .btn-success:active, .btn-success.active,
  .show > .btn-success.dropdown-toggle {
    color: #fff;
    background-color: #146c43;
    border-color: #13653f; }
    .btn-check:checked + .btn-success:focus,
    .btn-check:active + .btn-success:focus, .btn-success:active:focus, .btn-success.active:focus,
    .show > .btn-success.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(60, 153, 110, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(60, 153, 110, 0.5); }
  .btn-success:disabled, .btn-success.disabled {
    color: #fff;
    background-color: #198754;
    border-color: #198754; }

.btn-info {
  color: #000;
  background-color: #0dcaf0;
  border-color: #0dcaf0; }
  .btn-info:hover {
    color: #000;
    background-color: #31d2f2;
    border-color: #25cff2; }
  .btn-check:focus + .btn-info, .btn-info:focus {
    color: #000;
    background-color: #31d2f2;
    border-color: #25cff2;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(11, 172, 204, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(11, 172, 204, 0.5); }
  .btn-check:checked + .btn-info,
  .btn-check:active + .btn-info, .btn-info:active, .btn-info.active,
  .show > .btn-info.dropdown-toggle {
    color: #000;
    background-color: #3dd5f3;
    border-color: #25cff2; }
    .btn-check:checked + .btn-info:focus,
    .btn-check:active + .btn-info:focus, .btn-info:active:focus, .btn-info.active:focus,
    .show > .btn-info.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(11, 172, 204, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(11, 172, 204, 0.5); }
  .btn-info:disabled, .btn-info.disabled {
    color: #000;
    background-color: #0dcaf0;
    border-color: #0dcaf0; }

.btn-warning {
  color: #000;
  background-color: #ffc107;
  border-color: #ffc107; }
  .btn-warning:hover {
    color: #000;
    background-color: #ffca2c;
    border-color: #ffc720; }
  .btn-check:focus + .btn-warning, .btn-warning:focus {
    color: #000;
    background-color: #ffca2c;
    border-color: #ffc720;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(217, 164, 6, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(217, 164, 6, 0.5); }
  .btn-check:checked + .btn-warning,
  .btn-check:active + .btn-warning, .btn-warning:active, .btn-warning.active,
  .show > .btn-warning.dropdown-toggle {
    color: #000;
    background-color: #ffcd39;
    border-color: #ffc720; }
    .btn-check:checked + .btn-warning:focus,
    .btn-check:active + .btn-warning:focus, .btn-warning:active:focus, .btn-warning.active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(217, 164, 6, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(217, 164, 6, 0.5); }
  .btn-warning:disabled, .btn-warning.disabled {
    color: #000;
    background-color: #ffc107;
    border-color: #ffc107; }

.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545; }
  .btn-danger:hover {
    color: #fff;
    background-color: #bb2d3b;
    border-color: #b02a37; }
  .btn-check:focus + .btn-danger, .btn-danger:focus {
    color: #fff;
    background-color: #bb2d3b;
    border-color: #b02a37;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(225, 83, 97, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(225, 83, 97, 0.5); }
  .btn-check:checked + .btn-danger,
  .btn-check:active + .btn-danger, .btn-danger:active, .btn-danger.active,
  .show > .btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #b02a37;
    border-color: #a52834; }
    .btn-check:checked + .btn-danger:focus,
    .btn-check:active + .btn-danger:focus, .btn-danger:active:focus, .btn-danger.active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(225, 83, 97, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(225, 83, 97, 0.5); }
  .btn-danger:disabled, .btn-danger.disabled {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545; }

.btn-light {
  color: #000;
  background-color: #f8f9fa;
  border-color: #f8f9fa; }
  .btn-light:hover {
    color: #000;
    background-color: #f9fafb;
    border-color: #f9fafb; }
  .btn-check:focus + .btn-light, .btn-light:focus {
    color: #000;
    background-color: #f9fafb;
    border-color: #f9fafb;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(211, 212, 213, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(211, 212, 213, 0.5); }
  .btn-check:checked + .btn-light,
  .btn-check:active + .btn-light, .btn-light:active, .btn-light.active,
  .show > .btn-light.dropdown-toggle {
    color: #000;
    background-color: #f9fafb;
    border-color: #f9fafb; }
    .btn-check:checked + .btn-light:focus,
    .btn-check:active + .btn-light:focus, .btn-light:active:focus, .btn-light.active:focus,
    .show > .btn-light.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(211, 212, 213, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(211, 212, 213, 0.5); }
  .btn-light:disabled, .btn-light.disabled {
    color: #000;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }

.btn-dark {
  color: #fff;
  background-color: #212529;
  border-color: #212529; }
  .btn-dark:hover {
    color: #fff;
    background-color: #1c1f23;
    border-color: #1a1e21; }
  .btn-check:focus + .btn-dark, .btn-dark:focus {
    color: #fff;
    background-color: #1c1f23;
    border-color: #1a1e21;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(66, 70, 73, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(66, 70, 73, 0.5); }
  .btn-check:checked + .btn-dark,
  .btn-check:active + .btn-dark, .btn-dark:active, .btn-dark.active,
  .show > .btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #1a1e21;
    border-color: #191c1f; }
    .btn-check:checked + .btn-dark:focus,
    .btn-check:active + .btn-dark:focus, .btn-dark:active:focus, .btn-dark.active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(66, 70, 73, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(66, 70, 73, 0.5); }
  .btn-dark:disabled, .btn-dark.disabled {
    color: #fff;
    background-color: #212529;
    border-color: #212529; }

.btn-outline-primary {
  color: #00204a;
  border-color: #00204a; }
  .btn-outline-primary:hover {
    color: #fff;
    background-color: #00204a;
    border-color: #00204a; }
  .btn-check:focus + .btn-outline-primary, .btn-outline-primary:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.5); }
  .btn-check:checked + .btn-outline-primary,
  .btn-check:active + .btn-outline-primary, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.dropdown-toggle.show {
    color: #fff;
    background-color: #00204a;
    border-color: #00204a; }
    .btn-check:checked + .btn-outline-primary:focus,
    .btn-check:active + .btn-outline-primary:focus, .btn-outline-primary:active:focus, .btn-outline-primary.active:focus, .btn-outline-primary.dropdown-toggle.show:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.5); }
  .btn-outline-primary:disabled, .btn-outline-primary.disabled {
    color: #00204a;
    background-color: transparent; }

.btn-outline-secondary {
  color: #005555;
  border-color: #005555; }
  .btn-outline-secondary:hover {
    color: #fff;
    background-color: #005555;
    border-color: #005555; }
  .btn-check:focus + .btn-outline-secondary, .btn-outline-secondary:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 85, 85, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(0, 85, 85, 0.5); }
  .btn-check:checked + .btn-outline-secondary,
  .btn-check:active + .btn-outline-secondary, .btn-outline-secondary:active, .btn-outline-secondary.active, .btn-outline-secondary.dropdown-toggle.show {
    color: #fff;
    background-color: #005555;
    border-color: #005555; }
    .btn-check:checked + .btn-outline-secondary:focus,
    .btn-check:active + .btn-outline-secondary:focus, .btn-outline-secondary:active:focus, .btn-outline-secondary.active:focus, .btn-outline-secondary.dropdown-toggle.show:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 85, 85, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(0, 85, 85, 0.5); }
  .btn-outline-secondary:disabled, .btn-outline-secondary.disabled {
    color: #005555;
    background-color: transparent; }

.btn-outline-success {
  color: #198754;
  border-color: #198754; }
  .btn-outline-success:hover {
    color: #fff;
    background-color: #198754;
    border-color: #198754; }
  .btn-check:focus + .btn-outline-success, .btn-outline-success:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.5); }
  .btn-check:checked + .btn-outline-success,
  .btn-check:active + .btn-outline-success, .btn-outline-success:active, .btn-outline-success.active, .btn-outline-success.dropdown-toggle.show {
    color: #fff;
    background-color: #198754;
    border-color: #198754; }
    .btn-check:checked + .btn-outline-success:focus,
    .btn-check:active + .btn-outline-success:focus, .btn-outline-success:active:focus, .btn-outline-success.active:focus, .btn-outline-success.dropdown-toggle.show:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.5); }
  .btn-outline-success:disabled, .btn-outline-success.disabled {
    color: #198754;
    background-color: transparent; }

.btn-outline-info {
  color: #0dcaf0;
  border-color: #0dcaf0; }
  .btn-outline-info:hover {
    color: #000;
    background-color: #0dcaf0;
    border-color: #0dcaf0; }
  .btn-check:focus + .btn-outline-info, .btn-outline-info:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(13, 202, 240, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(13, 202, 240, 0.5); }
  .btn-check:checked + .btn-outline-info,
  .btn-check:active + .btn-outline-info, .btn-outline-info:active, .btn-outline-info.active, .btn-outline-info.dropdown-toggle.show {
    color: #000;
    background-color: #0dcaf0;
    border-color: #0dcaf0; }
    .btn-check:checked + .btn-outline-info:focus,
    .btn-check:active + .btn-outline-info:focus, .btn-outline-info:active:focus, .btn-outline-info.active:focus, .btn-outline-info.dropdown-toggle.show:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(13, 202, 240, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(13, 202, 240, 0.5); }
  .btn-outline-info:disabled, .btn-outline-info.disabled {
    color: #0dcaf0;
    background-color: transparent; }

.btn-outline-warning {
  color: #ffc107;
  border-color: #ffc107; }
  .btn-outline-warning:hover {
    color: #000;
    background-color: #ffc107;
    border-color: #ffc107; }
  .btn-check:focus + .btn-outline-warning, .btn-outline-warning:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.5); }
  .btn-check:checked + .btn-outline-warning,
  .btn-check:active + .btn-outline-warning, .btn-outline-warning:active, .btn-outline-warning.active, .btn-outline-warning.dropdown-toggle.show {
    color: #000;
    background-color: #ffc107;
    border-color: #ffc107; }
    .btn-check:checked + .btn-outline-warning:focus,
    .btn-check:active + .btn-outline-warning:focus, .btn-outline-warning:active:focus, .btn-outline-warning.active:focus, .btn-outline-warning.dropdown-toggle.show:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.5); }
  .btn-outline-warning:disabled, .btn-outline-warning.disabled {
    color: #ffc107;
    background-color: transparent; }

.btn-outline-danger {
  color: #dc3545;
  border-color: #dc3545; }
  .btn-outline-danger:hover {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545; }
  .btn-check:focus + .btn-outline-danger, .btn-outline-danger:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.5); }
  .btn-check:checked + .btn-outline-danger,
  .btn-check:active + .btn-outline-danger, .btn-outline-danger:active, .btn-outline-danger.active, .btn-outline-danger.dropdown-toggle.show {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545; }
    .btn-check:checked + .btn-outline-danger:focus,
    .btn-check:active + .btn-outline-danger:focus, .btn-outline-danger:active:focus, .btn-outline-danger.active:focus, .btn-outline-danger.dropdown-toggle.show:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.5); }
  .btn-outline-danger:disabled, .btn-outline-danger.disabled {
    color: #dc3545;
    background-color: transparent; }

.btn-outline-light {
  color: #f8f9fa;
  border-color: #f8f9fa; }
  .btn-outline-light:hover {
    color: #000;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-check:focus + .btn-outline-light, .btn-outline-light:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(248, 249, 250, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(248, 249, 250, 0.5); }
  .btn-check:checked + .btn-outline-light,
  .btn-check:active + .btn-outline-light, .btn-outline-light:active, .btn-outline-light.active, .btn-outline-light.dropdown-toggle.show {
    color: #000;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
    .btn-check:checked + .btn-outline-light:focus,
    .btn-check:active + .btn-outline-light:focus, .btn-outline-light:active:focus, .btn-outline-light.active:focus, .btn-outline-light.dropdown-toggle.show:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(248, 249, 250, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(248, 249, 250, 0.5); }
  .btn-outline-light:disabled, .btn-outline-light.disabled {
    color: #f8f9fa;
    background-color: transparent; }

.btn-outline-dark {
  color: #212529;
  border-color: #212529; }
  .btn-outline-dark:hover {
    color: #fff;
    background-color: #212529;
    border-color: #212529; }
  .btn-check:focus + .btn-outline-dark, .btn-outline-dark:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(33, 37, 41, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(33, 37, 41, 0.5); }
  .btn-check:checked + .btn-outline-dark,
  .btn-check:active + .btn-outline-dark, .btn-outline-dark:active, .btn-outline-dark.active, .btn-outline-dark.dropdown-toggle.show {
    color: #fff;
    background-color: #212529;
    border-color: #212529; }
    .btn-check:checked + .btn-outline-dark:focus,
    .btn-check:active + .btn-outline-dark:focus, .btn-outline-dark:active:focus, .btn-outline-dark.active:focus, .btn-outline-dark.dropdown-toggle.show:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(33, 37, 41, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(33, 37, 41, 0.5); }
  .btn-outline-dark:disabled, .btn-outline-dark.disabled {
    color: #212529;
    background-color: transparent; }

.btn-link {
  font-weight: 400;
  color: #00204a;
  text-decoration: underline; }
  .btn-link:hover {
    color: #001a3b; }
  .btn-link:disabled, .btn-link.disabled {
    color: #6c757d; }

.btn-lg, .btn-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  border-radius: 0.3rem; }

.btn-sm, .btn-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  border-radius: 0.2rem; }

.fade {
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear; }
  @media (prefers-reduced-motion: reduce) {
    .fade {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .fade:not(.show) {
    opacity: 0; }

.collapse:not(.show) {
  display: none; }

.collapsing {
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  -o-transition: height 0.35s ease;
  transition: height 0.35s ease; }
  @media (prefers-reduced-motion: reduce) {
    .collapsing {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .collapsing.collapse-horizontal {
    width: 0;
    height: auto;
    -webkit-transition: width 0.35s ease;
    -o-transition: width 0.35s ease;
    transition: width 0.35s ease; }
    @media (prefers-reduced-motion: reduce) {
      .collapsing.collapse-horizontal {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }

.dropup,
.dropend,
.dropdown,
.dropstart {
  position: relative; }

.dropdown-toggle {
  white-space: nowrap; }
  .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent; }
  .dropdown-toggle:empty::after {
    margin-left: 0; }

.dropdown-menu {
  position: absolute;
  z-index: 1000;
  display: none;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem; }
  .dropdown-menu[data-bs-popper] {
    top: 100%;
    left: 0;
    margin-top: 0.125rem; }

.dropdown-menu-start {
  --bs-position: start; }
  .dropdown-menu-start[data-bs-popper] {
    right: auto;
    left: 0; }

.dropdown-menu-end {
  --bs-position: end; }
  .dropdown-menu-end[data-bs-popper] {
    right: 0;
    left: auto; }

@media (min-width: 576px) {
  .dropdown-menu-sm-start {
    --bs-position: start; }
    .dropdown-menu-sm-start[data-bs-popper] {
      right: auto;
      left: 0; }
  .dropdown-menu-sm-end {
    --bs-position: end; }
    .dropdown-menu-sm-end[data-bs-popper] {
      right: 0;
      left: auto; } }

@media (min-width: 768px) {
  .dropdown-menu-md-start {
    --bs-position: start; }
    .dropdown-menu-md-start[data-bs-popper] {
      right: auto;
      left: 0; }
  .dropdown-menu-md-end {
    --bs-position: end; }
    .dropdown-menu-md-end[data-bs-popper] {
      right: 0;
      left: auto; } }

@media (min-width: 992px) {
  .dropdown-menu-lg-start {
    --bs-position: start; }
    .dropdown-menu-lg-start[data-bs-popper] {
      right: auto;
      left: 0; }
  .dropdown-menu-lg-end {
    --bs-position: end; }
    .dropdown-menu-lg-end[data-bs-popper] {
      right: 0;
      left: auto; } }

@media (min-width: 1200px) {
  .dropdown-menu-xl-start {
    --bs-position: start; }
    .dropdown-menu-xl-start[data-bs-popper] {
      right: auto;
      left: 0; }
  .dropdown-menu-xl-end {
    --bs-position: end; }
    .dropdown-menu-xl-end[data-bs-popper] {
      right: 0;
      left: auto; } }

@media (min-width: 1400px) {
  .dropdown-menu-xxl-start {
    --bs-position: start; }
    .dropdown-menu-xxl-start[data-bs-popper] {
      right: auto;
      left: 0; }
  .dropdown-menu-xxl-end {
    --bs-position: end; }
    .dropdown-menu-xxl-end[data-bs-popper] {
      right: 0;
      left: auto; } }

.dropup .dropdown-menu[data-bs-popper] {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem; }

.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent; }

.dropup .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropend .dropdown-menu[data-bs-popper] {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem; }

.dropend .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid; }

.dropend .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropend .dropdown-toggle::after {
  vertical-align: 0; }

.dropstart .dropdown-menu[data-bs-popper] {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem; }

.dropstart .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: ""; }

.dropstart .dropdown-toggle::after {
  display: none; }

.dropstart .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent; }

.dropstart .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropstart .dropdown-toggle::before {
  vertical-align: 0; }

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid rgba(0, 0, 0, 0.15); }

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  text-decoration: none;
  white-space: nowrap;
  background-color: transparent;
  border: 0; }
  .dropdown-item:hover, .dropdown-item:focus {
    color: #1e2125;
    background-color: #e9ecef; }
  .dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #00204a; }
  .dropdown-item.disabled, .dropdown-item:disabled {
    color: #adb5bd;
    pointer-events: none;
    background-color: transparent; }

.dropdown-menu.show {
  display: block; }

.dropdown-header {
  display: block;
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #6c757d;
  white-space: nowrap; }

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1rem;
  color: #212529; }

.dropdown-menu-dark {
  color: #dee2e6;
  background-color: #343a40;
  border-color: rgba(0, 0, 0, 0.15); }
  .dropdown-menu-dark .dropdown-item {
    color: #dee2e6; }
    .dropdown-menu-dark .dropdown-item:hover, .dropdown-menu-dark .dropdown-item:focus {
      color: #fff;
      background-color: rgba(255, 255, 255, 0.15); }
    .dropdown-menu-dark .dropdown-item.active, .dropdown-menu-dark .dropdown-item:active {
      color: #fff;
      background-color: #00204a; }
    .dropdown-menu-dark .dropdown-item.disabled, .dropdown-menu-dark .dropdown-item:disabled {
      color: #adb5bd; }
  .dropdown-menu-dark .dropdown-divider {
    border-color: rgba(0, 0, 0, 0.15); }
  .dropdown-menu-dark .dropdown-item-text {
    color: #dee2e6; }
  .dropdown-menu-dark .dropdown-header {
    color: #adb5bd; }

.btn-group,
.btn-group-vertical {
  position: relative;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle; }
  .btn-group > .btn,
  .btn-group-vertical > .btn {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto; }
  .btn-group > .btn-check:checked + .btn,
  .btn-group > .btn-check:focus + .btn,
  .btn-group > .btn:hover,
  .btn-group > .btn:focus,
  .btn-group > .btn:active,
  .btn-group > .btn.active,
  .btn-group-vertical > .btn-check:checked + .btn,
  .btn-group-vertical > .btn-check:focus + .btn,
  .btn-group-vertical > .btn:hover,
  .btn-group-vertical > .btn:focus,
  .btn-group-vertical > .btn:active,
  .btn-group-vertical > .btn.active {
    z-index: 1; }

.btn-toolbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start; }
  .btn-toolbar .input-group {
    width: auto; }

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px; }

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.btn-group > .btn:nth-child(n + 3),
.btn-group > :not(.btn-check) + .btn,
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.dropdown-toggle-split {
  padding-right: 0.5625rem;
  padding-left: 0.5625rem; }
  .dropdown-toggle-split::after,
  .dropup .dropdown-toggle-split::after,
  .dropend .dropdown-toggle-split::after {
    margin-left: 0; }
  .dropstart .dropdown-toggle-split::before {
    margin-right: 0; }

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem; }

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem; }

.btn-group-vertical {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center; }
  .btn-group-vertical > .btn,
  .btn-group-vertical > .btn-group {
    width: 100%; }
  .btn-group-vertical > .btn:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child) {
    margin-top: -1px; }
  .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
  .btn-group-vertical > .btn-group:not(:last-child) > .btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }
  .btn-group-vertical > .btn ~ .btn,
  .btn-group-vertical > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
  color: #00204a;
  text-decoration: none;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
  -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .nav-link {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .nav-link:hover, .nav-link:focus {
    color: #001a3b; }
  .nav-link.disabled {
    color: #6c757d;
    pointer-events: none;
    cursor: default; }

.nav-tabs {
  border-bottom: 1px solid #dee2e6; }
  .nav-tabs .nav-link {
    margin-bottom: -1px;
    background: none;
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
    .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
      border-color: #e9ecef #e9ecef #dee2e6;
      isolation: isolate; }
    .nav-tabs .nav-link.disabled {
      color: #6c757d;
      background-color: transparent;
      border-color: transparent; }
  .nav-tabs .nav-link.active,
  .nav-tabs .nav-item.show .nav-link {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff; }
  .nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.nav-pills .nav-link {
  background: none;
  border: 0;
  border-radius: 0.25rem; }

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #00204a; }

.nav-fill > .nav-link,
.nav-fill .nav-item {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  text-align: center; }

.nav-justified > .nav-link,
.nav-justified .nav-item {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  text-align: center; }

.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: 100%; }

.tab-content > .tab-pane {
  display: none; }

.tab-content > .active {
  display: block; }

.navbar {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem; }
  .navbar > .container,
  .navbar > .container-fluid, .navbar > .container-sm, .navbar > .container-md, .navbar > .container-lg, .navbar > .container-xl, .navbar > .container-xxl {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: inherit;
    flex-wrap: inherit;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between; }

.navbar-brand {
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  text-decoration: none;
  white-space: nowrap; }

.navbar-nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }
  .navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0; }
  .navbar-nav .dropdown-menu {
    position: static; }

.navbar-text {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem; }

.navbar-collapse {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center; }

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  -webkit-transition: -webkit-box-shadow 0.15s ease-in-out;
  transition: -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: box-shadow 0.15s ease-in-out;
  transition: box-shadow 0.15s ease-in-out;
  transition: box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .navbar-toggler {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .navbar-toggler:hover {
    text-decoration: none; }
  .navbar-toggler:focus {
    text-decoration: none;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.25rem;
    box-shadow: 0 0 0 0.25rem; }

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%; }

.navbar-nav-scroll {
  max-height: var(--bs-scroll-height, 75vh);
  overflow-y: auto; }

@media (min-width: 576px) {
  .navbar-expand-sm {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-sm .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-sm .navbar-nav-scroll {
      overflow: visible; }
    .navbar-expand-sm .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-sm .navbar-toggler {
      display: none; }
    .navbar-expand-sm .offcanvas-header {
      display: none; }
    .navbar-expand-sm .offcanvas {
      position: inherit;
      bottom: 0;
      z-index: 1000;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      visibility: visible !important;
      background-color: transparent;
      border-right: 0;
      border-left: 0;
      -webkit-transition: none;
      -o-transition: none;
      transition: none;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none; }
    .navbar-expand-sm .offcanvas-top,
    .navbar-expand-sm .offcanvas-bottom {
      height: auto;
      border-top: 0;
      border-bottom: 0; }
    .navbar-expand-sm .offcanvas-body {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -ms-flex-positive: 0;
      flex-grow: 0;
      padding: 0;
      overflow-y: visible; } }

@media (min-width: 768px) {
  .navbar-expand-md {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-md .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-md .navbar-nav-scroll {
      overflow: visible; }
    .navbar-expand-md .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-md .navbar-toggler {
      display: none; }
    .navbar-expand-md .offcanvas-header {
      display: none; }
    .navbar-expand-md .offcanvas {
      position: inherit;
      bottom: 0;
      z-index: 1000;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      visibility: visible !important;
      background-color: transparent;
      border-right: 0;
      border-left: 0;
      -webkit-transition: none;
      -o-transition: none;
      transition: none;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none; }
    .navbar-expand-md .offcanvas-top,
    .navbar-expand-md .offcanvas-bottom {
      height: auto;
      border-top: 0;
      border-bottom: 0; }
    .navbar-expand-md .offcanvas-body {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -ms-flex-positive: 0;
      flex-grow: 0;
      padding: 0;
      overflow-y: visible; } }

@media (min-width: 992px) {
  .navbar-expand-lg {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-lg .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-lg .navbar-nav-scroll {
      overflow: visible; }
    .navbar-expand-lg .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-lg .navbar-toggler {
      display: none; }
    .navbar-expand-lg .offcanvas-header {
      display: none; }
    .navbar-expand-lg .offcanvas {
      position: inherit;
      bottom: 0;
      z-index: 1000;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      visibility: visible !important;
      background-color: transparent;
      border-right: 0;
      border-left: 0;
      -webkit-transition: none;
      -o-transition: none;
      transition: none;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none; }
    .navbar-expand-lg .offcanvas-top,
    .navbar-expand-lg .offcanvas-bottom {
      height: auto;
      border-top: 0;
      border-bottom: 0; }
    .navbar-expand-lg .offcanvas-body {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -ms-flex-positive: 0;
      flex-grow: 0;
      padding: 0;
      overflow-y: visible; } }

@media (min-width: 1200px) {
  .navbar-expand-xl {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-xl .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-xl .navbar-nav-scroll {
      overflow: visible; }
    .navbar-expand-xl .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-xl .navbar-toggler {
      display: none; }
    .navbar-expand-xl .offcanvas-header {
      display: none; }
    .navbar-expand-xl .offcanvas {
      position: inherit;
      bottom: 0;
      z-index: 1000;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      visibility: visible !important;
      background-color: transparent;
      border-right: 0;
      border-left: 0;
      -webkit-transition: none;
      -o-transition: none;
      transition: none;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none; }
    .navbar-expand-xl .offcanvas-top,
    .navbar-expand-xl .offcanvas-bottom {
      height: auto;
      border-top: 0;
      border-bottom: 0; }
    .navbar-expand-xl .offcanvas-body {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -ms-flex-positive: 0;
      flex-grow: 0;
      padding: 0;
      overflow-y: visible; } }

@media (min-width: 1400px) {
  .navbar-expand-xxl {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-xxl .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-xxl .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-xxl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-xxl .navbar-nav-scroll {
      overflow: visible; }
    .navbar-expand-xxl .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-xxl .navbar-toggler {
      display: none; }
    .navbar-expand-xxl .offcanvas-header {
      display: none; }
    .navbar-expand-xxl .offcanvas {
      position: inherit;
      bottom: 0;
      z-index: 1000;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      visibility: visible !important;
      background-color: transparent;
      border-right: 0;
      border-left: 0;
      -webkit-transition: none;
      -o-transition: none;
      transition: none;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none; }
    .navbar-expand-xxl .offcanvas-top,
    .navbar-expand-xxl .offcanvas-bottom {
      height: auto;
      border-top: 0;
      border-bottom: 0; }
    .navbar-expand-xxl .offcanvas-body {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -ms-flex-positive: 0;
      flex-grow: 0;
      padding: 0;
      overflow-y: visible; } }

.navbar-expand {
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start; }
  .navbar-expand .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .navbar-expand .navbar-nav .dropdown-menu {
      position: absolute; }
    .navbar-expand .navbar-nav .nav-link {
      padding-right: 0.5rem;
      padding-left: 0.5rem; }
  .navbar-expand .navbar-nav-scroll {
    overflow: visible; }
  .navbar-expand .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto; }
  .navbar-expand .navbar-toggler {
    display: none; }
  .navbar-expand .offcanvas-header {
    display: none; }
  .navbar-expand .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none; }
  .navbar-expand .offcanvas-top,
  .navbar-expand .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0; }
  .navbar-expand .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible; }

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9); }
  .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.55); }
  .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0, 0.7); }
  .navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3); }

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.55);
  border-color: rgba(0, 0, 0, 0.1); }

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.55); }
  .navbar-light .navbar-text a,
  .navbar-light .navbar-text a:hover,
  .navbar-light .navbar-text a:focus {
    color: rgba(0, 0, 0, 0.9); }

.navbar-dark .navbar-brand {
  color: #fff; }
  .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
    color: #fff; }

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.55); }
  .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75); }
  .navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25); }

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff; }

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.55);
  border-color: rgba(255, 255, 255, 0.1); }

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.55); }
  .navbar-dark .navbar-text a,
  .navbar-dark .navbar-text a:hover,
  .navbar-dark .navbar-text a:focus {
    color: #fff; }

.card {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem; }
  .card > hr {
    margin-right: 0;
    margin-left: 0; }
  .card > .list-group {
    border-top: inherit;
    border-bottom: inherit; }
    .card > .list-group:first-child {
      border-top-width: 0;
      border-top-left-radius: calc(0.25rem - 1px);
      border-top-right-radius: calc(0.25rem - 1px); }
    .card > .list-group:last-child {
      border-bottom-width: 0;
      border-bottom-right-radius: calc(0.25rem - 1px);
      border-bottom-left-radius: calc(0.25rem - 1px); }
  .card > .card-header + .list-group,
  .card > .list-group + .card-footer {
    border-top: 0; }

.card-body {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1rem 1rem; }

.card-title {
  margin-bottom: 0.5rem; }

.card-subtitle {
  margin-top: -0.25rem;
  margin-bottom: 0; }

.card-text:last-child {
  margin-bottom: 0; }

.card-link + .card-link {
  margin-left: 1rem; }

.card-header {
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125); }
  .card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0; }

.card-footer {
  padding: 0.5rem 1rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125); }
  .card-footer:last-child {
    border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px); }

.card-header-tabs {
  margin-right: -0.5rem;
  margin-bottom: -0.5rem;
  margin-left: -0.5rem;
  border-bottom: 0; }

.card-header-pills {
  margin-right: -0.5rem;
  margin-left: -0.5rem; }

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  border-radius: calc(0.25rem - 1px); }

.card-img,
.card-img-top,
.card-img-bottom {
  width: 100%; }

.card-img,
.card-img-top {
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px); }

.card-img,
.card-img-bottom {
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px); }

.card-group > .card {
  margin-bottom: 0.75rem; }

@media (min-width: 576px) {
  .card-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap; }
    .card-group > .card {
      -webkit-box-flex: 1;
      -ms-flex: 1 0 0%;
      flex: 1 0 0%;
      margin-bottom: 0; }
      .card-group > .card + .card {
        margin-left: 0;
        border-left: 0; }
      .card-group > .card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0; }
        .card-group > .card:not(:last-child) .card-img-top,
        .card-group > .card:not(:last-child) .card-header {
          border-top-right-radius: 0; }
        .card-group > .card:not(:last-child) .card-img-bottom,
        .card-group > .card:not(:last-child) .card-footer {
          border-bottom-right-radius: 0; }
      .card-group > .card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0; }
        .card-group > .card:not(:first-child) .card-img-top,
        .card-group > .card:not(:first-child) .card-header {
          border-top-left-radius: 0; }
        .card-group > .card:not(:first-child) .card-img-bottom,
        .card-group > .card:not(:first-child) .card-footer {
          border-bottom-left-radius: 0; } }

.accordion-button {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  padding: 1rem 1.25rem;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  background-color: #fff;
  border: 0;
  border-radius: 0;
  overflow-anchor: none;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, border-radius 0.15s ease, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, border-radius 0.15s ease, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .accordion-button {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .accordion-button:not(.collapsed) {
    color: #001d43;
    background-color: #e6e9ed;
    -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125); }
    .accordion-button:not(.collapsed)::after {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23001d43'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
      -webkit-transform: rotate(-180deg);
      -ms-transform: rotate(-180deg);
      transform: rotate(-180deg); }
  .accordion-button::after {
    -ms-flex-negative: 0;
    flex-shrink: 0;
    width: 1.25rem;
    height: 1.25rem;
    margin-left: auto;
    content: "";
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-size: 1.25rem;
    -webkit-transition: -webkit-transform 0.2s ease-in-out;
    transition: -webkit-transform 0.2s ease-in-out;
    -o-transition: transform 0.2s ease-in-out;
    transition: transform 0.2s ease-in-out;
    transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
      .accordion-button::after {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
  .accordion-button:hover {
    z-index: 2; }
  .accordion-button:focus {
    z-index: 3;
    border-color: #8090a5;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.25); }

.accordion-header {
  margin-bottom: 0; }

.accordion-item {
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125); }
  .accordion-item:first-of-type {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
    .accordion-item:first-of-type .accordion-button {
      border-top-left-radius: calc(0.25rem - 1px);
      border-top-right-radius: calc(0.25rem - 1px); }
  .accordion-item:not(:first-of-type) {
    border-top: 0; }
  .accordion-item:last-of-type {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; }
    .accordion-item:last-of-type .accordion-button.collapsed {
      border-bottom-right-radius: calc(0.25rem - 1px);
      border-bottom-left-radius: calc(0.25rem - 1px); }
    .accordion-item:last-of-type .accordion-collapse {
      border-bottom-right-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem; }

.accordion-body {
  padding: 1rem 1.25rem; }

.accordion-flush .accordion-collapse {
  border-width: 0; }

.accordion-flush .accordion-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0; }
  .accordion-flush .accordion-item:first-child {
    border-top: 0; }
  .accordion-flush .accordion-item:last-child {
    border-bottom: 0; }
  .accordion-flush .accordion-item .accordion-button {
    border-radius: 0; }

.breadcrumb {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 0 0;
  margin-bottom: 1rem;
  list-style: none; }

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem; }
  .breadcrumb-item + .breadcrumb-item::before {
    float: left;
    padding-right: 0.5rem;
    color: #6c757d;
    content: var(--bs-breadcrumb-divider, "/") /* rtl: var(--bs-breadcrumb-divider, "/") */; }

.breadcrumb-item.active {
  color: #6c757d; }

.pagination {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none; }

.page-link {
  position: relative;
  display: block;
  color: #00204a;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #dee2e6;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .page-link {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .page-link:hover {
    z-index: 2;
    color: #001a3b;
    background-color: #e9ecef;
    border-color: #dee2e6; }
  .page-link:focus {
    z-index: 3;
    color: #001a3b;
    background-color: #e9ecef;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.25); }

.page-item:not(:first-child) .page-link {
  margin-left: -1px; }

.page-item.active .page-link {
  z-index: 3;
  color: #fff;
  background-color: #00204a;
  border-color: #00204a; }

.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  background-color: #fff;
  border-color: #dee2e6; }

.page-link {
  padding: 0.375rem 0.75rem; }

.page-item:first-child .page-link {
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem; }

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem; }

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem; }

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem; }

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem; }

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem; }

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem; }

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem; }

.badge {
  display: inline-block;
  padding: 0.35em 0.65em;
  font-size: 0.75em;
  font-weight: 700;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem; }
  .badge:empty {
    display: none; }

.btn .badge {
  position: relative;
  top: -1px; }

.alert {
  position: relative;
  padding: 1rem 1rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem; }

.alert-heading {
  color: inherit; }

.alert-link {
  font-weight: 700; }

.alert-dismissible {
  padding-right: 3rem; }
  .alert-dismissible .btn-close {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    padding: 1.25rem 1rem; }

.alert-primary {
  color: #00132c;
  background-color: #ccd2db;
  border-color: #b3bcc9; }
  .alert-primary .alert-link {
    color: #000f23; }

.alert-secondary {
  color: #003333;
  background-color: #ccdddd;
  border-color: #b3cccc; }
  .alert-secondary .alert-link {
    color: #002929; }

.alert-success {
  color: #0f5132;
  background-color: #d1e7dd;
  border-color: #badbcc; }
  .alert-success .alert-link {
    color: #0c4128; }

.alert-info {
  color: #055160;
  background-color: #cff4fc;
  border-color: #b6effb; }
  .alert-info .alert-link {
    color: #04414d; }

.alert-warning {
  color: #664d03;
  background-color: #fff3cd;
  border-color: #ffecb5; }
  .alert-warning .alert-link {
    color: #523e02; }

.alert-danger {
  color: #842029;
  background-color: #f8d7da;
  border-color: #f5c2c7; }
  .alert-danger .alert-link {
    color: #6a1a21; }

.alert-light {
  color: #636464;
  background-color: #fefefe;
  border-color: #fdfdfe; }
  .alert-light .alert-link {
    color: #4f5050; }

.alert-dark {
  color: #141619;
  background-color: #d3d3d4;
  border-color: #bcbebf; }
  .alert-dark .alert-link {
    color: #101214; }

@-webkit-keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem; } }

@keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem; } }

.progress {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0.25rem; }

.progress-bar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  overflow: hidden;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #00204a;
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease; }
  @media (prefers-reduced-motion: reduce) {
    .progress-bar {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }

.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem; }

.progress-bar-animated {
  -webkit-animation: 1s linear infinite progress-bar-stripes;
  animation: 1s linear infinite progress-bar-stripes; }
  @media (prefers-reduced-motion: reduce) {
    .progress-bar-animated {
      -webkit-animation: none;
      animation: none; } }

.list-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: 0.25rem; }

.list-group-numbered {
  list-style-type: none;
  counter-reset: section; }
  .list-group-numbered > li::before {
    content: counters(section, ".") ". ";
    counter-increment: section; }

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit; }
  .list-group-item-action:hover, .list-group-item-action:focus {
    z-index: 1;
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa; }
  .list-group-item-action:active {
    color: #212529;
    background-color: #e9ecef; }

.list-group-item {
  position: relative;
  display: block;
  padding: 0.5rem 1rem;
  color: #212529;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125); }
  .list-group-item:first-child {
    border-top-left-radius: inherit;
    border-top-right-radius: inherit; }
  .list-group-item:last-child {
    border-bottom-right-radius: inherit;
    border-bottom-left-radius: inherit; }
  .list-group-item.disabled, .list-group-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff; }
  .list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #00204a;
    border-color: #00204a; }
  .list-group-item + .list-group-item {
    border-top-width: 0; }
    .list-group-item + .list-group-item.active {
      margin-top: -1px;
      border-top-width: 1px; }

.list-group-horizontal {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row; }
  .list-group-horizontal > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0; }
  .list-group-horizontal > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0; }
  .list-group-horizontal > .list-group-item.active {
    margin-top: 0; }
  .list-group-horizontal > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0; }
    .list-group-horizontal > .list-group-item + .list-group-item.active {
      margin-left: -1px;
      border-left-width: 1px; }

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-sm > .list-group-item:first-child {
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal-sm > .list-group-item:last-child {
      border-top-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-sm > .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-sm > .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

@media (min-width: 768px) {
  .list-group-horizontal-md {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-md > .list-group-item:first-child {
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal-md > .list-group-item:last-child {
      border-top-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-md > .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-md > .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-md > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

@media (min-width: 992px) {
  .list-group-horizontal-lg {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-lg > .list-group-item:first-child {
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal-lg > .list-group-item:last-child {
      border-top-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-lg > .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-lg > .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-xl > .list-group-item:first-child {
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal-xl > .list-group-item:last-child {
      border-top-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-xl > .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-xl > .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

@media (min-width: 1400px) {
  .list-group-horizontal-xxl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-xxl > .list-group-item:first-child {
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal-xxl > .list-group-item:last-child {
      border-top-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-xxl > .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-xxl > .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

.list-group-flush {
  border-radius: 0; }
  .list-group-flush > .list-group-item {
    border-width: 0 0 1px; }
    .list-group-flush > .list-group-item:last-child {
      border-bottom-width: 0; }

.list-group-item-primary {
  color: #00132c;
  background-color: #ccd2db; }
  .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
    color: #00132c;
    background-color: #b8bdc5; }
  .list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #00132c;
    border-color: #00132c; }

.list-group-item-secondary {
  color: #003333;
  background-color: #ccdddd; }
  .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
    color: #003333;
    background-color: #b8c7c7; }
  .list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #003333;
    border-color: #003333; }

.list-group-item-success {
  color: #0f5132;
  background-color: #d1e7dd; }
  .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
    color: #0f5132;
    background-color: #bcd0c7; }
  .list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #0f5132;
    border-color: #0f5132; }

.list-group-item-info {
  color: #055160;
  background-color: #cff4fc; }
  .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
    color: #055160;
    background-color: #badce3; }
  .list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #055160;
    border-color: #055160; }

.list-group-item-warning {
  color: #664d03;
  background-color: #fff3cd; }
  .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
    color: #664d03;
    background-color: #e6dbb9; }
  .list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #664d03;
    border-color: #664d03; }

.list-group-item-danger {
  color: #842029;
  background-color: #f8d7da; }
  .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
    color: #842029;
    background-color: #dfc2c4; }
  .list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #842029;
    border-color: #842029; }

.list-group-item-light {
  color: #636464;
  background-color: #fefefe; }
  .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
    color: #636464;
    background-color: #e5e5e5; }
  .list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #636464;
    border-color: #636464; }

.list-group-item-dark {
  color: #141619;
  background-color: #d3d3d4; }
  .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
    color: #141619;
    background-color: #bebebf; }
  .list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #141619;
    border-color: #141619; }

.btn-close {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  width: 1em;
  height: 1em;
  padding: 0.25em 0.25em;
  color: #000;
  background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
  border: 0;
  border-radius: 0.25rem;
  opacity: 0.5; }
  .btn-close:hover {
    color: #000;
    text-decoration: none;
    opacity: 0.75; }
  .btn-close:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(0, 32, 74, 0.25);
    opacity: 1; }
  .btn-close:disabled, .btn-close.disabled {
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    opacity: 0.25; }

.btn-close-white {
  -webkit-filter: invert(1) grayscale(100%) brightness(200%);
  filter: invert(1) grayscale(100%) brightness(200%); }

.toast {
  width: 350px;
  max-width: 100%;
  font-size: 0.875rem;
  pointer-events: auto;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem; }
  .toast.showing {
    opacity: 0; }
  .toast:not(.show) {
    display: none; }

.toast-container {
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
  max-width: 100%;
  pointer-events: none; }
  .toast-container > :not(:last-child) {
    margin-bottom: 0.75rem; }

.toast-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.5rem 0.75rem;
  color: #6c757d;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px); }
  .toast-header .btn-close {
    margin-right: -0.375rem;
    margin-left: 0.75rem; }

.toast-body {
  padding: 0.75rem;
  word-wrap: break-word; }

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1055;
  display: none;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  outline: 0; }

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none; }
  .modal.fade .modal-dialog {
    -webkit-transition: -webkit-transform 0.3s ease-out;
    transition: -webkit-transform 0.3s ease-out;
    -o-transition: transform 0.3s ease-out;
    transition: transform 0.3s ease-out;
    transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
    -webkit-transform: translate(0, -50px);
    -ms-transform: translate(0, -50px);
    transform: translate(0, -50px); }
    @media (prefers-reduced-motion: reduce) {
      .modal.fade .modal-dialog {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
  .modal.show .modal-dialog {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none; }
  .modal.modal-static .modal-dialog {
    -webkit-transform: scale(1.02);
    -ms-transform: scale(1.02);
    transform: scale(1.02); }

.modal-dialog-scrollable {
  height: calc(100% - 1rem); }
  .modal-dialog-scrollable .modal-content {
    max-height: 100%;
    overflow: hidden; }
  .modal-dialog-scrollable .modal-body {
    overflow-y: auto; }

.modal-dialog-centered {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - 1rem); }

.modal-content {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0; }

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  width: 100vw;
  height: 100vh;
  background-color: #000; }
  .modal-backdrop.fade {
    opacity: 0; }
  .modal-backdrop.show {
    opacity: 0.5; }

.modal-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #dee2e6;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px); }
  .modal-header .btn-close {
    padding: 0.5rem 0.5rem;
    margin: -0.5rem -0.5rem -0.5rem auto; }

.modal-title {
  margin-bottom: 0;
  line-height: 1.5; }

.modal-body {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1rem; }

.modal-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 0.75rem;
  border-top: 1px solid #dee2e6;
  border-bottom-right-radius: calc(0.3rem - 1px);
  border-bottom-left-radius: calc(0.3rem - 1px); }
  .modal-footer > * {
    margin: 0.25rem; }

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto; }
  .modal-dialog-scrollable {
    height: calc(100% - 3.5rem); }
  .modal-dialog-centered {
    min-height: calc(100% - 3.5rem); }
  .modal-sm {
    max-width: 300px; } }

@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    max-width: 800px; } }

@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px; } }

.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0; }
  .modal-fullscreen .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0; }
  .modal-fullscreen .modal-header {
    border-radius: 0; }
  .modal-fullscreen .modal-body {
    overflow-y: auto; }
  .modal-fullscreen .modal-footer {
    border-radius: 0; }

@media (max-width: 575.98px) {
  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0; }
    .modal-fullscreen-sm-down .modal-content {
      height: 100%;
      border: 0;
      border-radius: 0; }
    .modal-fullscreen-sm-down .modal-header {
      border-radius: 0; }
    .modal-fullscreen-sm-down .modal-body {
      overflow-y: auto; }
    .modal-fullscreen-sm-down .modal-footer {
      border-radius: 0; } }

@media (max-width: 767.98px) {
  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0; }
    .modal-fullscreen-md-down .modal-content {
      height: 100%;
      border: 0;
      border-radius: 0; }
    .modal-fullscreen-md-down .modal-header {
      border-radius: 0; }
    .modal-fullscreen-md-down .modal-body {
      overflow-y: auto; }
    .modal-fullscreen-md-down .modal-footer {
      border-radius: 0; } }

@media (max-width: 991.98px) {
  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0; }
    .modal-fullscreen-lg-down .modal-content {
      height: 100%;
      border: 0;
      border-radius: 0; }
    .modal-fullscreen-lg-down .modal-header {
      border-radius: 0; }
    .modal-fullscreen-lg-down .modal-body {
      overflow-y: auto; }
    .modal-fullscreen-lg-down .modal-footer {
      border-radius: 0; } }

@media (max-width: 1199.98px) {
  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0; }
    .modal-fullscreen-xl-down .modal-content {
      height: 100%;
      border: 0;
      border-radius: 0; }
    .modal-fullscreen-xl-down .modal-header {
      border-radius: 0; }
    .modal-fullscreen-xl-down .modal-body {
      overflow-y: auto; }
    .modal-fullscreen-xl-down .modal-footer {
      border-radius: 0; } }

@media (max-width: 1399.98px) {
  .modal-fullscreen-xxl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0; }
    .modal-fullscreen-xxl-down .modal-content {
      height: 100%;
      border: 0;
      border-radius: 0; }
    .modal-fullscreen-xxl-down .modal-header {
      border-radius: 0; }
    .modal-fullscreen-xxl-down .modal-body {
      overflow-y: auto; }
    .modal-fullscreen-xxl-down .modal-footer {
      border-radius: 0; } }

.tooltip {
  position: absolute;
  z-index: 1080;
  display: block;
  margin: 0;
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0; }
  .tooltip.show {
    opacity: 0.9; }
  .tooltip .tooltip-arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem; }
    .tooltip .tooltip-arrow::before {
      position: absolute;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-tooltip-top, .bs-tooltip-auto[data-popper-placement^="top"] {
  padding: 0.4rem 0; }
  .bs-tooltip-top .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow {
    bottom: 0; }
    .bs-tooltip-top .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow::before {
      top: -1px;
      border-width: 0.4rem 0.4rem 0;
      border-top-color: #000; }

.bs-tooltip-end, .bs-tooltip-auto[data-popper-placement^="right"] {
  padding: 0 0.4rem; }
  .bs-tooltip-end .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-end .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow::before {
      right: -1px;
      border-width: 0.4rem 0.4rem 0.4rem 0;
      border-right-color: #000; }

.bs-tooltip-bottom, .bs-tooltip-auto[data-popper-placement^="bottom"] {
  padding: 0.4rem 0; }
  .bs-tooltip-bottom .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow {
    top: 0; }
    .bs-tooltip-bottom .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow::before {
      bottom: -1px;
      border-width: 0 0.4rem 0.4rem;
      border-bottom-color: #000; }

.bs-tooltip-start, .bs-tooltip-auto[data-popper-placement^="left"] {
  padding: 0 0.4rem; }
  .bs-tooltip-start .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-start .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow::before {
      left: -1px;
      border-width: 0.4rem 0 0.4rem 0.4rem;
      border-left-color: #000; }

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem; }

.popover {
  position: absolute;
  top: 0;
  left: 0 /* rtl:ignore */;
  z-index: 1070;
  display: block;
  max-width: 276px;
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem; }
  .popover .popover-arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem; }
    .popover .popover-arrow::before, .popover .popover-arrow::after {
      position: absolute;
      display: block;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-popover-top > .popover-arrow, .bs-popover-auto[data-popper-placement^="top"] > .popover-arrow {
  bottom: calc(-0.5rem - 1px); }
  .bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^="top"] > .popover-arrow::before {
    bottom: 0;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: rgba(0, 0, 0, 0.25); }
  .bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^="top"] > .popover-arrow::after {
    bottom: 1px;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: #fff; }

.bs-popover-end > .popover-arrow, .bs-popover-auto[data-popper-placement^="right"] > .popover-arrow {
  left: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem; }
  .bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^="right"] > .popover-arrow::before {
    left: 0;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: rgba(0, 0, 0, 0.25); }
  .bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^="right"] > .popover-arrow::after {
    left: 1px;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: #fff; }

.bs-popover-bottom > .popover-arrow, .bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow {
  top: calc(-0.5rem - 1px); }
  .bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow::before {
    top: 0;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: rgba(0, 0, 0, 0.25); }
  .bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow::after {
    top: 1px;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: #fff; }

.bs-popover-bottom .popover-header::before, .bs-popover-auto[data-popper-placement^="bottom"] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f0f0f0; }

.bs-popover-start > .popover-arrow, .bs-popover-auto[data-popper-placement^="left"] > .popover-arrow {
  right: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem; }
  .bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^="left"] > .popover-arrow::before {
    right: 0;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: rgba(0, 0, 0, 0.25); }
  .bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^="left"] > .popover-arrow::after {
    right: 1px;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: #fff; }

.popover-header {
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  font-size: 1rem;
  background-color: #f0f0f0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px); }
  .popover-header:empty {
    display: none; }

.popover-body {
  padding: 1rem 1rem;
  color: #212529; }

.carousel {
  position: relative; }

.carousel.pointer-event {
  -ms-touch-action: pan-y;
  touch-action: pan-y; }

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden; }
  .carousel-inner::after {
    display: block;
    clear: both;
    content: ""; }

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.6s ease-in-out;
  transition: -webkit-transform 0.6s ease-in-out;
  -o-transition: transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-item {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block; }

/* rtl:begin:ignore */
.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
  -webkit-transform: translateX(100%);
  -ms-transform: translateX(100%);
  transform: translateX(100%); }

.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
  -webkit-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  transform: translateX(-100%); }

/* rtl:end:ignore */
.carousel-fade .carousel-item {
  opacity: 0;
  -webkit-transition-property: opacity;
  -o-transition-property: opacity;
  transition-property: opacity;
  -webkit-transform: none;
  -ms-transform: none;
  transform: none; }

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
  z-index: 1;
  opacity: 1; }

.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
  z-index: 0;
  opacity: 0;
  -webkit-transition: opacity 0s 0.6s;
  -o-transition: opacity 0s 0.6s;
  transition: opacity 0s 0.6s; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-fade .active.carousel-item-start,
    .carousel-fade .active.carousel-item-end {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 15%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: none;
  border: 0;
  opacity: 0.5;
  -webkit-transition: opacity 0.15s ease;
  -o-transition: opacity 0.15s ease;
  transition: opacity 0.15s ease; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-control-prev,
    .carousel-control-next {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .carousel-control-prev:hover, .carousel-control-prev:focus,
  .carousel-control-next:hover,
  .carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9; }

.carousel-control-prev {
  left: 0; }

.carousel-control-next {
  right: 0; }

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%; }

/* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e"); }

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e"); }

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding: 0;
  margin-right: 15%;
  margin-bottom: 1rem;
  margin-left: 15%;
  list-style: none; }
  .carousel-indicators [data-bs-target] {
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    padding: 0;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: 0.5;
    -webkit-transition: opacity 0.6s ease;
    -o-transition: opacity 0.6s ease;
    transition: opacity 0.6s ease; }
    @media (prefers-reduced-motion: reduce) {
      .carousel-indicators [data-bs-target] {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
  .carousel-indicators .active {
    opacity: 1; }

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 1.25rem;
  left: 15%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: center; }

.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
  -webkit-filter: invert(1) grayscale(100);
  filter: invert(1) grayscale(100); }

.carousel-dark .carousel-indicators [data-bs-target] {
  background-color: #000; }

.carousel-dark .carousel-caption {
  color: #000; }

@-webkit-keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg) /* rtl:ignore */;
    transform: rotate(360deg) /* rtl:ignore */; } }

@keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg) /* rtl:ignore */;
    transform: rotate(360deg) /* rtl:ignore */; } }

.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  -webkit-animation: 0.75s linear infinite spinner-border;
  animation: 0.75s linear infinite spinner-border; }

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em; }

@-webkit-keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0); }
  50% {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

@keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0); }
  50% {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  -webkit-animation: 0.75s linear infinite spinner-grow;
  animation: 0.75s linear infinite spinner-grow; }

.spinner-grow-sm {
  width: 1rem;
  height: 1rem; }

@media (prefers-reduced-motion: reduce) {
  .spinner-border,
  .spinner-grow {
    -webkit-animation-duration: 1.5s;
    animation-duration: 1.5s; } }

.offcanvas {
  position: fixed;
  bottom: 0;
  z-index: 1045;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  max-width: 100%;
  visibility: hidden;
  background-color: #fff;
  background-clip: padding-box;
  outline: 0;
  -webkit-transition: -webkit-transform 0.3s ease-in-out;
  transition: -webkit-transform 0.3s ease-in-out;
  -o-transition: transform 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .offcanvas {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }

.offcanvas-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000; }
  .offcanvas-backdrop.fade {
    opacity: 0; }
  .offcanvas-backdrop.show {
    opacity: 0.5; }

.offcanvas-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 1rem 1rem; }
  .offcanvas-header .btn-close {
    padding: 0.5rem 0.5rem;
    margin-top: -0.5rem;
    margin-right: -0.5rem;
    margin-bottom: -0.5rem; }

.offcanvas-title {
  margin-bottom: 0;
  line-height: 1.5; }

.offcanvas-body {
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  padding: 1rem 1rem;
  overflow-y: auto; }

.offcanvas-start {
  top: 0;
  left: 0;
  width: 400px;
  border-right: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  transform: translateX(-100%); }

.offcanvas-end {
  top: 0;
  right: 0;
  width: 400px;
  border-left: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-transform: translateX(100%);
  -ms-transform: translateX(100%);
  transform: translateX(100%); }

.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-transform: translateY(-100%);
  -ms-transform: translateY(-100%);
  transform: translateY(-100%); }

.offcanvas-bottom {
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-top: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-transform: translateY(100%);
  -ms-transform: translateY(100%);
  transform: translateY(100%); }

.offcanvas.show {
  -webkit-transform: none;
  -ms-transform: none;
  transform: none; }

.placeholder {
  display: inline-block;
  min-height: 1em;
  vertical-align: middle;
  cursor: wait;
  background-color: currentColor;
  opacity: 0.5; }
  .placeholder.btn::before {
    display: inline-block;
    content: ""; }

.placeholder-xs {
  min-height: .6em; }

.placeholder-sm {
  min-height: .8em; }

.placeholder-lg {
  min-height: 1.2em; }

.placeholder-glow .placeholder {
  -webkit-animation: placeholder-glow 2s ease-in-out infinite;
  animation: placeholder-glow 2s ease-in-out infinite; }

@-webkit-keyframes placeholder-glow {
  50% {
    opacity: 0.2; } }

@keyframes placeholder-glow {
  50% {
    opacity: 0.2; } }

.placeholder-wave {
  -webkit-mask-image: -webkit-linear-gradient(320deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
  mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
  -webkit-mask-size: 200% 100%;
  mask-size: 200% 100%;
  -webkit-animation: placeholder-wave 2s linear infinite;
  animation: placeholder-wave 2s linear infinite; }

@-webkit-keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0%;
    mask-position: -200% 0%; } }

@keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0%;
    mask-position: -200% 0%; } }

.clearfix::after {
  display: block;
  clear: both;
  content: ""; }

.link-primary {
  color: #00204a; }
  .link-primary:hover, .link-primary:focus {
    color: #001a3b; }

.link-secondary {
  color: #005555; }
  .link-secondary:hover, .link-secondary:focus {
    color: #004444; }

.link-success {
  color: #198754; }
  .link-success:hover, .link-success:focus {
    color: #146c43; }

.link-info {
  color: #0dcaf0; }
  .link-info:hover, .link-info:focus {
    color: #3dd5f3; }

.link-warning {
  color: #ffc107; }
  .link-warning:hover, .link-warning:focus {
    color: #ffcd39; }

.link-danger {
  color: #dc3545; }
  .link-danger:hover, .link-danger:focus {
    color: #b02a37; }

.link-light {
  color: #f8f9fa; }
  .link-light:hover, .link-light:focus {
    color: #f9fafb; }

.link-dark {
  color: #212529; }
  .link-dark:hover, .link-dark:focus {
    color: #1a1e21; }

.ratio {
  position: relative;
  width: 100%; }
  .ratio::before {
    display: block;
    padding-top: var(--bs-aspect-ratio);
    content: ""; }
  .ratio > * {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; }

.ratio-1x1 {
  --bs-aspect-ratio: 100%; }

.ratio-4x3 {
  --bs-aspect-ratio: calc(3 / 4 * 100%); }

.ratio-16x9 {
  --bs-aspect-ratio: calc(9 / 16 * 100%); }

.ratio-21x9 {
  --bs-aspect-ratio: calc(9 / 21 * 100%); }

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030; }

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030; }

.sticky-top {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  z-index: 1020; }

@media (min-width: 576px) {
  .sticky-sm-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020; } }

@media (min-width: 768px) {
  .sticky-md-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020; } }

@media (min-width: 992px) {
  .sticky-lg-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020; } }

@media (min-width: 1200px) {
  .sticky-xl-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020; } }

@media (min-width: 1400px) {
  .sticky-xxl-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020; } }

.hstack {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-item-align: stretch;
  align-self: stretch; }

.vstack {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-item-align: stretch;
  align-self: stretch; }

.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important; }

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: ""; }

.text-truncate {
  overflow: hidden;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  white-space: nowrap; }

.vr {
  display: inline-block;
  -ms-flex-item-align: stretch;
  -ms-grid-row-align: stretch;
  align-self: stretch;
  width: 1px;
  min-height: 1em;
  background-color: currentColor;
  opacity: 0.25; }

.align-baseline {
  vertical-align: baseline !important; }

.align-top {
  vertical-align: top !important; }

.align-middle {
  vertical-align: middle !important; }

.align-bottom {
  vertical-align: bottom !important; }

.align-text-bottom {
  vertical-align: text-bottom !important; }

.align-text-top {
  vertical-align: text-top !important; }

.float-start {
  float: left !important; }

.float-end {
  float: right !important; }

.float-none {
  float: none !important; }

.opacity-0 {
  opacity: 0 !important; }

.opacity-25 {
  opacity: 0.25 !important; }

.opacity-50 {
  opacity: 0.5 !important; }

.opacity-75 {
  opacity: 0.75 !important; }

.opacity-100 {
  opacity: 1 !important; }

.overflow-auto {
  overflow: auto !important; }

.overflow-hidden {
  overflow: hidden !important; }

.overflow-visible {
  overflow: visible !important; }

.overflow-scroll {
  overflow: scroll !important; }

.d-inline {
  display: inline !important; }

.d-inline-block {
  display: inline-block !important; }

.d-block {
  display: block !important; }

.d-grid {
  display: -ms-grid !important;
  display: grid !important; }

.d-table {
  display: table !important; }

.d-table-row {
  display: table-row !important; }

.d-table-cell {
  display: table-cell !important; }

.d-flex {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important; }

.d-inline-flex {
  display: -webkit-inline-box !important;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important; }

.d-none {
  display: none !important; }

.shadow {
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; }

.shadow-sm {
  -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; }

.shadow-lg {
  -webkit-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important; }

.shadow-none {
  -webkit-box-shadow: none !important;
  box-shadow: none !important; }

.position-static {
  position: static !important; }

.position-relative {
  position: relative !important; }

.position-absolute {
  position: absolute !important; }

.position-fixed {
  position: fixed !important; }

.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important; }

.top-0 {
  top: 0 !important; }

.top-50 {
  top: 50% !important; }

.top-100 {
  top: 100% !important; }

.bottom-0 {
  bottom: 0 !important; }

.bottom-50 {
  bottom: 50% !important; }

.bottom-100 {
  bottom: 100% !important; }

.start-0 {
  left: 0 !important; }

.start-50 {
  left: 50% !important; }

.start-100 {
  left: 100% !important; }

.end-0 {
  right: 0 !important; }

.end-50 {
  right: 50% !important; }

.end-100 {
  right: 100% !important; }

.translate-middle {
  -webkit-transform: translate(-50%, -50%) !important;
  -ms-transform: translate(-50%, -50%) !important;
  transform: translate(-50%, -50%) !important; }

.translate-middle-x {
  -webkit-transform: translateX(-50%) !important;
  -ms-transform: translateX(-50%) !important;
  transform: translateX(-50%) !important; }

.translate-middle-y {
  -webkit-transform: translateY(-50%) !important;
  -ms-transform: translateY(-50%) !important;
  transform: translateY(-50%) !important; }

.border {
  border: 1px solid #dee2e6 !important; }

.border-0 {
  border: 0 !important; }

.border-top {
  border-top: 1px solid #dee2e6 !important; }

.border-top-0 {
  border-top: 0 !important; }

.border-end {
  border-right: 1px solid #dee2e6 !important; }

.border-end-0 {
  border-right: 0 !important; }

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important; }

.border-bottom-0 {
  border-bottom: 0 !important; }

.border-start {
  border-left: 1px solid #dee2e6 !important; }

.border-start-0 {
  border-left: 0 !important; }

.border-primary {
  border-color: #00204a !important; }

.border-secondary {
  border-color: #005555 !important; }

.border-success {
  border-color: #198754 !important; }

.border-info {
  border-color: #0dcaf0 !important; }

.border-warning {
  border-color: #ffc107 !important; }

.border-danger {
  border-color: #dc3545 !important; }

.border-light {
  border-color: #f8f9fa !important; }

.border-dark {
  border-color: #212529 !important; }

.border-white {
  border-color: #fff !important; }

.border-1 {
  border-width: 1px !important; }

.border-2 {
  border-width: 2px !important; }

.border-3 {
  border-width: 3px !important; }

.border-4 {
  border-width: 4px !important; }

.border-5 {
  border-width: 5px !important; }

.w-25 {
  width: 25% !important; }

.w-50 {
  width: 50% !important; }

.w-75 {
  width: 75% !important; }

.w-100 {
  width: 100% !important; }

.w-auto {
  width: auto !important; }

.mw-100 {
  max-width: 100% !important; }

.vw-100 {
  width: 100vw !important; }

.min-vw-100 {
  min-width: 100vw !important; }

.h-25 {
  height: 25% !important; }

.h-50 {
  height: 50% !important; }

.h-75 {
  height: 75% !important; }

.h-100 {
  height: 100% !important; }

.h-auto {
  height: auto !important; }

.mh-100 {
  max-height: 100% !important; }

.vh-100 {
  height: 100vh !important; }

.min-vh-100 {
  min-height: 100vh !important; }

.flex-fill {
  -webkit-box-flex: 1 !important;
  -ms-flex: 1 1 auto !important;
  flex: 1 1 auto !important; }

.flex-row {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: row !important;
  flex-direction: row !important; }

.flex-column {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: column !important;
  flex-direction: column !important; }

.flex-row-reverse {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important; }

.flex-column-reverse {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important; }

.flex-grow-0 {
  -webkit-box-flex: 0 !important;
  -ms-flex-positive: 0 !important;
  flex-grow: 0 !important; }

.flex-grow-1 {
  -webkit-box-flex: 1 !important;
  -ms-flex-positive: 1 !important;
  flex-grow: 1 !important; }

.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
  flex-shrink: 0 !important; }

.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
  flex-shrink: 1 !important; }

.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important; }

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important; }

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important; }

.gap-0 {
  gap: 0 !important; }

.gap-1 {
  gap: 0.25rem !important; }

.gap-2 {
  gap: 0.5rem !important; }

.gap-3 {
  gap: 1rem !important; }

.gap-4 {
  gap: 1.5rem !important; }

.gap-5 {
  gap: 3rem !important; }

.justify-content-start {
  -webkit-box-pack: start !important;
  -ms-flex-pack: start !important;
  justify-content: flex-start !important; }

.justify-content-end {
  -webkit-box-pack: end !important;
  -ms-flex-pack: end !important;
  justify-content: flex-end !important; }

.justify-content-center {
  -webkit-box-pack: center !important;
  -ms-flex-pack: center !important;
  justify-content: center !important; }

.justify-content-between {
  -webkit-box-pack: justify !important;
  -ms-flex-pack: justify !important;
  justify-content: space-between !important; }

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important; }

.justify-content-evenly {
  -webkit-box-pack: space-evenly !important;
  -ms-flex-pack: space-evenly !important;
  justify-content: space-evenly !important; }

.align-items-start {
  -webkit-box-align: start !important;
  -ms-flex-align: start !important;
  align-items: flex-start !important; }

.align-items-end {
  -webkit-box-align: end !important;
  -ms-flex-align: end !important;
  align-items: flex-end !important; }

.align-items-center {
  -webkit-box-align: center !important;
  -ms-flex-align: center !important;
  align-items: center !important; }

.align-items-baseline {
  -webkit-box-align: baseline !important;
  -ms-flex-align: baseline !important;
  align-items: baseline !important; }

.align-items-stretch {
  -webkit-box-align: stretch !important;
  -ms-flex-align: stretch !important;
  align-items: stretch !important; }

.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important; }

.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important; }

.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important; }

.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important; }

.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important; }

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important; }

.align-self-auto {
  -ms-flex-item-align: auto !important;
  -ms-grid-row-align: auto !important;
  align-self: auto !important; }

.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important; }

.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important; }

.align-self-center {
  -ms-flex-item-align: center !important;
  -ms-grid-row-align: center !important;
  align-self: center !important; }

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important; }

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
  -ms-grid-row-align: stretch !important;
  align-self: stretch !important; }

.order-first {
  -webkit-box-ordinal-group: 0 !important;
  -ms-flex-order: -1 !important;
  order: -1 !important; }

.order-0 {
  -webkit-box-ordinal-group: 1 !important;
  -ms-flex-order: 0 !important;
  order: 0 !important; }

.order-1 {
  -webkit-box-ordinal-group: 2 !important;
  -ms-flex-order: 1 !important;
  order: 1 !important; }

.order-2 {
  -webkit-box-ordinal-group: 3 !important;
  -ms-flex-order: 2 !important;
  order: 2 !important; }

.order-3 {
  -webkit-box-ordinal-group: 4 !important;
  -ms-flex-order: 3 !important;
  order: 3 !important; }

.order-4 {
  -webkit-box-ordinal-group: 5 !important;
  -ms-flex-order: 4 !important;
  order: 4 !important; }

.order-5 {
  -webkit-box-ordinal-group: 6 !important;
  -ms-flex-order: 5 !important;
  order: 5 !important; }

.order-last {
  -webkit-box-ordinal-group: 7 !important;
  -ms-flex-order: 6 !important;
  order: 6 !important; }

.m-0 {
  margin: 0 !important; }

.m-1 {
  margin: 0.25rem !important; }

.m-2 {
  margin: 0.5rem !important; }

.m-3 {
  margin: 1rem !important; }

.m-4 {
  margin: 1.5rem !important; }

.m-5 {
  margin: 3rem !important; }

.m-auto {
  margin: auto !important; }

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important; }

.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important; }

.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important; }

.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important; }

.mx-4 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important; }

.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important; }

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important; }

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important; }

.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important; }

.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important; }

.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important; }

.my-4 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important; }

.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important; }

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important; }

.mt-0 {
  margin-top: 0 !important; }

.mt-1 {
  margin-top: 0.25rem !important; }

.mt-2 {
  margin-top: 0.5rem !important; }

.mt-3 {
  margin-top: 1rem !important; }

.mt-4 {
  margin-top: 1.5rem !important; }

.mt-5 {
  margin-top: 3rem !important; }

.mt-auto {
  margin-top: auto !important; }

.me-0 {
  margin-right: 0 !important; }

.me-1 {
  margin-right: 0.25rem !important; }

.me-2 {
  margin-right: 0.5rem !important; }

.me-3 {
  margin-right: 1rem !important; }

.me-4 {
  margin-right: 1.5rem !important; }

.me-5 {
  margin-right: 3rem !important; }

.me-auto {
  margin-right: auto !important; }

.mb-0 {
  margin-bottom: 0 !important; }

.mb-1 {
  margin-bottom: 0.25rem !important; }

.mb-2 {
  margin-bottom: 0.5rem !important; }

.mb-3 {
  margin-bottom: 1rem !important; }

.mb-4 {
  margin-bottom: 1.5rem !important; }

.mb-5 {
  margin-bottom: 3rem !important; }

.mb-auto {
  margin-bottom: auto !important; }

.ms-0 {
  margin-left: 0 !important; }

.ms-1 {
  margin-left: 0.25rem !important; }

.ms-2 {
  margin-left: 0.5rem !important; }

.ms-3 {
  margin-left: 1rem !important; }

.ms-4 {
  margin-left: 1.5rem !important; }

.ms-5 {
  margin-left: 3rem !important; }

.ms-auto {
  margin-left: auto !important; }

.p-0 {
  padding: 0 !important; }

.p-1 {
  padding: 0.25rem !important; }

.p-2 {
  padding: 0.5rem !important; }

.p-3 {
  padding: 1rem !important; }

.p-4 {
  padding: 1.5rem !important; }

.p-5 {
  padding: 3rem !important; }

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important; }

.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important; }

.px-2 {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important; }

.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important; }

.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important; }

.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important; }

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important; }

.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important; }

.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important; }

.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important; }

.py-4 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important; }

.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important; }

.pt-0 {
  padding-top: 0 !important; }

.pt-1 {
  padding-top: 0.25rem !important; }

.pt-2 {
  padding-top: 0.5rem !important; }

.pt-3 {
  padding-top: 1rem !important; }

.pt-4 {
  padding-top: 1.5rem !important; }

.pt-5 {
  padding-top: 3rem !important; }

.pe-0 {
  padding-right: 0 !important; }

.pe-1 {
  padding-right: 0.25rem !important; }

.pe-2 {
  padding-right: 0.5rem !important; }

.pe-3 {
  padding-right: 1rem !important; }

.pe-4 {
  padding-right: 1.5rem !important; }

.pe-5 {
  padding-right: 3rem !important; }

.pb-0 {
  padding-bottom: 0 !important; }

.pb-1 {
  padding-bottom: 0.25rem !important; }

.pb-2 {
  padding-bottom: 0.5rem !important; }

.pb-3 {
  padding-bottom: 1rem !important; }

.pb-4 {
  padding-bottom: 1.5rem !important; }

.pb-5 {
  padding-bottom: 3rem !important; }

.ps-0 {
  padding-left: 0 !important; }

.ps-1 {
  padding-left: 0.25rem !important; }

.ps-2 {
  padding-left: 0.5rem !important; }

.ps-3 {
  padding-left: 1rem !important; }

.ps-4 {
  padding-left: 1.5rem !important; }

.ps-5 {
  padding-left: 3rem !important; }

.font-monospace {
  font-family: var(--bs-font-monospace) !important; }

.fs-1 {
  font-size: calc(1.375rem + 1.5vw) !important; }

.fs-2 {
  font-size: calc(1.325rem + 0.9vw) !important; }

.fs-3 {
  font-size: calc(1.3rem + 0.6vw) !important; }

.fs-4 {
  font-size: calc(1.275rem + 0.3vw) !important; }

.fs-5 {
  font-size: 1.25rem !important; }

.fs-6 {
  font-size: 1rem !important; }

.fst-italic {
  font-style: italic !important; }

.fst-normal {
  font-style: normal !important; }

.fw-light {
  font-weight: 300 !important; }

.fw-lighter {
  font-weight: lighter !important; }

.fw-normal {
  font-weight: 400 !important; }

.fw-bold {
  font-weight: 700 !important; }

.fw-bolder {
  font-weight: bolder !important; }

.lh-1 {
  line-height: 1 !important; }

.lh-sm {
  line-height: 1.25 !important; }

.lh-base {
  line-height: 1.5 !important; }

.lh-lg {
  line-height: 2 !important; }

.text-start {
  text-align: left !important; }

.text-end {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

.text-decoration-none {
  text-decoration: none !important; }

.text-decoration-underline {
  text-decoration: underline !important; }

.text-decoration-line-through {
  text-decoration: line-through !important; }

.text-lowercase {
  text-transform: lowercase !important; }

.text-uppercase {
  text-transform: uppercase !important; }

.text-capitalize {
  text-transform: capitalize !important; }

.text-wrap {
  white-space: normal !important; }

.text-nowrap {
  white-space: nowrap !important; }

/* rtl:begin:remove */
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important; }

/* rtl:end:remove */
.text-primary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important; }

.text-secondary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important; }

.text-success {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important; }

.text-info {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important; }

.text-warning {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important; }

.text-danger {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important; }

.text-light {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important; }

.text-dark {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important; }

.text-black {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important; }

.text-white {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important; }

.text-body {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-body-color-rgb), var(--bs-text-opacity)) !important; }

.text-muted {
  --bs-text-opacity: 1;
  color: #6c757d !important; }

.text-black-50, body {
  --bs-text-opacity: 1;
  color: rgba(0, 0, 0, 0.5) !important; }

.text-white-50 {
  --bs-text-opacity: 1;
  color: rgba(255, 255, 255, 0.5) !important; }

.text-reset {
  --bs-text-opacity: 1;
  color: inherit !important; }

.text-opacity-25 {
  --bs-text-opacity: 0.25; }

.text-opacity-50 {
  --bs-text-opacity: 0.5; }

.text-opacity-75 {
  --bs-text-opacity: 0.75; }

.text-opacity-100 {
  --bs-text-opacity: 1; }

.bg-primary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important; }

.bg-secondary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important; }

.bg-success {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important; }

.bg-info {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important; }

.bg-warning {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important; }

.bg-danger {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important; }

.bg-light {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important; }

.bg-dark {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important; }

.bg-black {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important; }

.bg-white {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important; }

.bg-body {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-body-bg-rgb), var(--bs-bg-opacity)) !important; }

.bg-transparent {
  --bs-bg-opacity: 1;
  background-color: transparent !important; }

.bg-opacity-10 {
  --bs-bg-opacity: 0.1; }

.bg-opacity-25 {
  --bs-bg-opacity: 0.25; }

.bg-opacity-50 {
  --bs-bg-opacity: 0.5; }

.bg-opacity-75 {
  --bs-bg-opacity: 0.75; }

.bg-opacity-100 {
  --bs-bg-opacity: 1; }

.bg-gradient {
  background-image: var(--bs-gradient) !important; }

.user-select-all {
  -webkit-user-select: all !important;
  -moz-user-select: all !important;
  -ms-user-select: all !important;
  user-select: all !important; }

.user-select-auto {
  -webkit-user-select: auto !important;
  -moz-user-select: auto !important;
  -ms-user-select: auto !important;
  user-select: auto !important; }

.user-select-none {
  -webkit-user-select: none !important;
  -moz-user-select: none !important;
  -ms-user-select: none !important;
  user-select: none !important; }

.pe-none {
  pointer-events: none !important; }

.pe-auto {
  pointer-events: auto !important; }

.rounded {
  border-radius: 0.25rem !important; }

.rounded-0 {
  border-radius: 0 !important; }

.rounded-1 {
  border-radius: 0.2rem !important; }

.rounded-2 {
  border-radius: 0.25rem !important; }

.rounded-3 {
  border-radius: 0.3rem !important; }

.rounded-circle {
  border-radius: 50% !important; }

.rounded-pill {
  border-radius: 50rem !important; }

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important; }

.rounded-end {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important; }

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important; }

.rounded-start {
  border-bottom-left-radius: 0.25rem !important;
  border-top-left-radius: 0.25rem !important; }

.visible {
  visibility: visible !important; }

.invisible {
  visibility: hidden !important; }

@media (min-width: 576px) {
  .float-sm-start {
    float: left !important; }
  .float-sm-end {
    float: right !important; }
  .float-sm-none {
    float: none !important; }
  .d-sm-inline {
    display: inline !important; }
  .d-sm-inline-block {
    display: inline-block !important; }
  .d-sm-block {
    display: block !important; }
  .d-sm-grid {
    display: -ms-grid !important;
    display: grid !important; }
  .d-sm-table {
    display: table !important; }
  .d-sm-table-row {
    display: table-row !important; }
  .d-sm-table-cell {
    display: table-cell !important; }
  .d-sm-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-sm-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-sm-none {
    display: none !important; }
  .flex-sm-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-sm-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-sm-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-sm-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-sm-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-sm-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .gap-sm-0 {
    gap: 0 !important; }
  .gap-sm-1 {
    gap: 0.25rem !important; }
  .gap-sm-2 {
    gap: 0.5rem !important; }
  .gap-sm-3 {
    gap: 1rem !important; }
  .gap-sm-4 {
    gap: 1.5rem !important; }
  .gap-sm-5 {
    gap: 3rem !important; }
  .justify-content-sm-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-sm-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-sm-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-sm-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .justify-content-sm-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important; }
  .align-items-sm-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-sm-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-sm-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-sm-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-sm-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    -ms-grid-row-align: auto !important;
    align-self: auto !important; }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    -ms-grid-row-align: center !important;
    align-self: center !important; }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important; }
  .order-sm-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important; }
  .order-sm-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important; }
  .order-sm-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important; }
  .order-sm-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important; }
  .order-sm-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important; }
  .order-sm-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important; }
  .order-sm-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important; }
  .order-sm-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important; }
  .m-sm-0 {
    margin: 0 !important; }
  .m-sm-1 {
    margin: 0.25rem !important; }
  .m-sm-2 {
    margin: 0.5rem !important; }
  .m-sm-3 {
    margin: 1rem !important; }
  .m-sm-4 {
    margin: 1.5rem !important; }
  .m-sm-5 {
    margin: 3rem !important; }
  .m-sm-auto {
    margin: auto !important; }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .mx-sm-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .mx-sm-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .mx-sm-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .mx-sm-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .mx-sm-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .my-sm-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .my-sm-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .my-sm-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .my-sm-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .my-sm-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; }
  .mt-sm-0 {
    margin-top: 0 !important; }
  .mt-sm-1 {
    margin-top: 0.25rem !important; }
  .mt-sm-2 {
    margin-top: 0.5rem !important; }
  .mt-sm-3 {
    margin-top: 1rem !important; }
  .mt-sm-4 {
    margin-top: 1.5rem !important; }
  .mt-sm-5 {
    margin-top: 3rem !important; }
  .mt-sm-auto {
    margin-top: auto !important; }
  .me-sm-0 {
    margin-right: 0 !important; }
  .me-sm-1 {
    margin-right: 0.25rem !important; }
  .me-sm-2 {
    margin-right: 0.5rem !important; }
  .me-sm-3 {
    margin-right: 1rem !important; }
  .me-sm-4 {
    margin-right: 1.5rem !important; }
  .me-sm-5 {
    margin-right: 3rem !important; }
  .me-sm-auto {
    margin-right: auto !important; }
  .mb-sm-0 {
    margin-bottom: 0 !important; }
  .mb-sm-1 {
    margin-bottom: 0.25rem !important; }
  .mb-sm-2 {
    margin-bottom: 0.5rem !important; }
  .mb-sm-3 {
    margin-bottom: 1rem !important; }
  .mb-sm-4 {
    margin-bottom: 1.5rem !important; }
  .mb-sm-5 {
    margin-bottom: 3rem !important; }
  .mb-sm-auto {
    margin-bottom: auto !important; }
  .ms-sm-0 {
    margin-left: 0 !important; }
  .ms-sm-1 {
    margin-left: 0.25rem !important; }
  .ms-sm-2 {
    margin-left: 0.5rem !important; }
  .ms-sm-3 {
    margin-left: 1rem !important; }
  .ms-sm-4 {
    margin-left: 1.5rem !important; }
  .ms-sm-5 {
    margin-left: 3rem !important; }
  .ms-sm-auto {
    margin-left: auto !important; }
  .p-sm-0 {
    padding: 0 !important; }
  .p-sm-1 {
    padding: 0.25rem !important; }
  .p-sm-2 {
    padding: 0.5rem !important; }
  .p-sm-3 {
    padding: 1rem !important; }
  .p-sm-4 {
    padding: 1.5rem !important; }
  .p-sm-5 {
    padding: 3rem !important; }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .px-sm-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .px-sm-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .px-sm-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .px-sm-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .px-sm-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .py-sm-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .py-sm-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .py-sm-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .py-sm-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .py-sm-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .pt-sm-0 {
    padding-top: 0 !important; }
  .pt-sm-1 {
    padding-top: 0.25rem !important; }
  .pt-sm-2 {
    padding-top: 0.5rem !important; }
  .pt-sm-3 {
    padding-top: 1rem !important; }
  .pt-sm-4 {
    padding-top: 1.5rem !important; }
  .pt-sm-5 {
    padding-top: 3rem !important; }
  .pe-sm-0 {
    padding-right: 0 !important; }
  .pe-sm-1 {
    padding-right: 0.25rem !important; }
  .pe-sm-2 {
    padding-right: 0.5rem !important; }
  .pe-sm-3 {
    padding-right: 1rem !important; }
  .pe-sm-4 {
    padding-right: 1.5rem !important; }
  .pe-sm-5 {
    padding-right: 3rem !important; }
  .pb-sm-0 {
    padding-bottom: 0 !important; }
  .pb-sm-1 {
    padding-bottom: 0.25rem !important; }
  .pb-sm-2 {
    padding-bottom: 0.5rem !important; }
  .pb-sm-3 {
    padding-bottom: 1rem !important; }
  .pb-sm-4 {
    padding-bottom: 1.5rem !important; }
  .pb-sm-5 {
    padding-bottom: 3rem !important; }
  .ps-sm-0 {
    padding-left: 0 !important; }
  .ps-sm-1 {
    padding-left: 0.25rem !important; }
  .ps-sm-2 {
    padding-left: 0.5rem !important; }
  .ps-sm-3 {
    padding-left: 1rem !important; }
  .ps-sm-4 {
    padding-left: 1.5rem !important; }
  .ps-sm-5 {
    padding-left: 3rem !important; }
  .text-sm-start {
    text-align: left !important; }
  .text-sm-end {
    text-align: right !important; }
  .text-sm-center {
    text-align: center !important; } }

@media (min-width: 768px) {
  .float-md-start {
    float: left !important; }
  .float-md-end {
    float: right !important; }
  .float-md-none {
    float: none !important; }
  .d-md-inline {
    display: inline !important; }
  .d-md-inline-block {
    display: inline-block !important; }
  .d-md-block {
    display: block !important; }
  .d-md-grid {
    display: -ms-grid !important;
    display: grid !important; }
  .d-md-table {
    display: table !important; }
  .d-md-table-row {
    display: table-row !important; }
  .d-md-table-cell {
    display: table-cell !important; }
  .d-md-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-md-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-md-none {
    display: none !important; }
  .flex-md-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-md-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-md-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-md-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-md-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-md-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .gap-md-0 {
    gap: 0 !important; }
  .gap-md-1 {
    gap: 0.25rem !important; }
  .gap-md-2 {
    gap: 0.5rem !important; }
  .gap-md-3 {
    gap: 1rem !important; }
  .gap-md-4 {
    gap: 1.5rem !important; }
  .gap-md-5 {
    gap: 3rem !important; }
  .justify-content-md-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-md-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-md-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-md-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .justify-content-md-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important; }
  .align-items-md-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-md-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-md-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-md-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-md-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    -ms-grid-row-align: auto !important;
    align-self: auto !important; }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    -ms-grid-row-align: center !important;
    align-self: center !important; }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important; }
  .order-md-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important; }
  .order-md-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important; }
  .order-md-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important; }
  .order-md-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important; }
  .order-md-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important; }
  .order-md-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important; }
  .order-md-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important; }
  .order-md-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important; }
  .m-md-0 {
    margin: 0 !important; }
  .m-md-1 {
    margin: 0.25rem !important; }
  .m-md-2 {
    margin: 0.5rem !important; }
  .m-md-3 {
    margin: 1rem !important; }
  .m-md-4 {
    margin: 1.5rem !important; }
  .m-md-5 {
    margin: 3rem !important; }
  .m-md-auto {
    margin: auto !important; }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .mx-md-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .mx-md-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .mx-md-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .mx-md-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .mx-md-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .my-md-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .my-md-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .my-md-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .my-md-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .my-md-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; }
  .mt-md-0 {
    margin-top: 0 !important; }
  .mt-md-1 {
    margin-top: 0.25rem !important; }
  .mt-md-2 {
    margin-top: 0.5rem !important; }
  .mt-md-3 {
    margin-top: 1rem !important; }
  .mt-md-4 {
    margin-top: 1.5rem !important; }
  .mt-md-5 {
    margin-top: 3rem !important; }
  .mt-md-auto {
    margin-top: auto !important; }
  .me-md-0 {
    margin-right: 0 !important; }
  .me-md-1 {
    margin-right: 0.25rem !important; }
  .me-md-2 {
    margin-right: 0.5rem !important; }
  .me-md-3 {
    margin-right: 1rem !important; }
  .me-md-4 {
    margin-right: 1.5rem !important; }
  .me-md-5 {
    margin-right: 3rem !important; }
  .me-md-auto {
    margin-right: auto !important; }
  .mb-md-0 {
    margin-bottom: 0 !important; }
  .mb-md-1 {
    margin-bottom: 0.25rem !important; }
  .mb-md-2 {
    margin-bottom: 0.5rem !important; }
  .mb-md-3 {
    margin-bottom: 1rem !important; }
  .mb-md-4 {
    margin-bottom: 1.5rem !important; }
  .mb-md-5 {
    margin-bottom: 3rem !important; }
  .mb-md-auto {
    margin-bottom: auto !important; }
  .ms-md-0 {
    margin-left: 0 !important; }
  .ms-md-1 {
    margin-left: 0.25rem !important; }
  .ms-md-2 {
    margin-left: 0.5rem !important; }
  .ms-md-3 {
    margin-left: 1rem !important; }
  .ms-md-4 {
    margin-left: 1.5rem !important; }
  .ms-md-5 {
    margin-left: 3rem !important; }
  .ms-md-auto {
    margin-left: auto !important; }
  .p-md-0 {
    padding: 0 !important; }
  .p-md-1 {
    padding: 0.25rem !important; }
  .p-md-2 {
    padding: 0.5rem !important; }
  .p-md-3 {
    padding: 1rem !important; }
  .p-md-4 {
    padding: 1.5rem !important; }
  .p-md-5 {
    padding: 3rem !important; }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .px-md-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .px-md-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .px-md-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .px-md-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .px-md-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .py-md-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .py-md-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .py-md-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .py-md-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .py-md-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .pt-md-0 {
    padding-top: 0 !important; }
  .pt-md-1 {
    padding-top: 0.25rem !important; }
  .pt-md-2 {
    padding-top: 0.5rem !important; }
  .pt-md-3 {
    padding-top: 1rem !important; }
  .pt-md-4 {
    padding-top: 1.5rem !important; }
  .pt-md-5 {
    padding-top: 3rem !important; }
  .pe-md-0 {
    padding-right: 0 !important; }
  .pe-md-1 {
    padding-right: 0.25rem !important; }
  .pe-md-2 {
    padding-right: 0.5rem !important; }
  .pe-md-3 {
    padding-right: 1rem !important; }
  .pe-md-4 {
    padding-right: 1.5rem !important; }
  .pe-md-5 {
    padding-right: 3rem !important; }
  .pb-md-0 {
    padding-bottom: 0 !important; }
  .pb-md-1 {
    padding-bottom: 0.25rem !important; }
  .pb-md-2 {
    padding-bottom: 0.5rem !important; }
  .pb-md-3 {
    padding-bottom: 1rem !important; }
  .pb-md-4 {
    padding-bottom: 1.5rem !important; }
  .pb-md-5 {
    padding-bottom: 3rem !important; }
  .ps-md-0 {
    padding-left: 0 !important; }
  .ps-md-1 {
    padding-left: 0.25rem !important; }
  .ps-md-2 {
    padding-left: 0.5rem !important; }
  .ps-md-3 {
    padding-left: 1rem !important; }
  .ps-md-4 {
    padding-left: 1.5rem !important; }
  .ps-md-5 {
    padding-left: 3rem !important; }
  .text-md-start {
    text-align: left !important; }
  .text-md-end {
    text-align: right !important; }
  .text-md-center {
    text-align: center !important; } }

@media (min-width: 992px) {
  .float-lg-start {
    float: left !important; }
  .float-lg-end {
    float: right !important; }
  .float-lg-none {
    float: none !important; }
  .d-lg-inline {
    display: inline !important; }
  .d-lg-inline-block {
    display: inline-block !important; }
  .d-lg-block {
    display: block !important; }
  .d-lg-grid {
    display: -ms-grid !important;
    display: grid !important; }
  .d-lg-table {
    display: table !important; }
  .d-lg-table-row {
    display: table-row !important; }
  .d-lg-table-cell {
    display: table-cell !important; }
  .d-lg-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-lg-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-lg-none {
    display: none !important; }
  .flex-lg-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-lg-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-lg-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-lg-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-lg-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-lg-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .gap-lg-0 {
    gap: 0 !important; }
  .gap-lg-1 {
    gap: 0.25rem !important; }
  .gap-lg-2 {
    gap: 0.5rem !important; }
  .gap-lg-3 {
    gap: 1rem !important; }
  .gap-lg-4 {
    gap: 1.5rem !important; }
  .gap-lg-5 {
    gap: 3rem !important; }
  .justify-content-lg-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-lg-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-lg-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-lg-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .justify-content-lg-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important; }
  .align-items-lg-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-lg-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-lg-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-lg-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-lg-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    -ms-grid-row-align: auto !important;
    align-self: auto !important; }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    -ms-grid-row-align: center !important;
    align-self: center !important; }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important; }
  .order-lg-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important; }
  .order-lg-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important; }
  .order-lg-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important; }
  .order-lg-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important; }
  .order-lg-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important; }
  .order-lg-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important; }
  .order-lg-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important; }
  .order-lg-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important; }
  .m-lg-0 {
    margin: 0 !important; }
  .m-lg-1 {
    margin: 0.25rem !important; }
  .m-lg-2 {
    margin: 0.5rem !important; }
  .m-lg-3 {
    margin: 1rem !important; }
  .m-lg-4 {
    margin: 1.5rem !important; }
  .m-lg-5 {
    margin: 3rem !important; }
  .m-lg-auto {
    margin: auto !important; }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .mx-lg-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .mx-lg-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .mx-lg-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .mx-lg-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .mx-lg-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .my-lg-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .my-lg-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .my-lg-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .my-lg-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .my-lg-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; }
  .mt-lg-0 {
    margin-top: 0 !important; }
  .mt-lg-1 {
    margin-top: 0.25rem !important; }
  .mt-lg-2 {
    margin-top: 0.5rem !important; }
  .mt-lg-3 {
    margin-top: 1rem !important; }
  .mt-lg-4 {
    margin-top: 1.5rem !important; }
  .mt-lg-5 {
    margin-top: 3rem !important; }
  .mt-lg-auto {
    margin-top: auto !important; }
  .me-lg-0 {
    margin-right: 0 !important; }
  .me-lg-1 {
    margin-right: 0.25rem !important; }
  .me-lg-2 {
    margin-right: 0.5rem !important; }
  .me-lg-3 {
    margin-right: 1rem !important; }
  .me-lg-4 {
    margin-right: 1.5rem !important; }
  .me-lg-5 {
    margin-right: 3rem !important; }
  .me-lg-auto {
    margin-right: auto !important; }
  .mb-lg-0 {
    margin-bottom: 0 !important; }
  .mb-lg-1 {
    margin-bottom: 0.25rem !important; }
  .mb-lg-2 {
    margin-bottom: 0.5rem !important; }
  .mb-lg-3 {
    margin-bottom: 1rem !important; }
  .mb-lg-4 {
    margin-bottom: 1.5rem !important; }
  .mb-lg-5 {
    margin-bottom: 3rem !important; }
  .mb-lg-auto {
    margin-bottom: auto !important; }
  .ms-lg-0 {
    margin-left: 0 !important; }
  .ms-lg-1 {
    margin-left: 0.25rem !important; }
  .ms-lg-2 {
    margin-left: 0.5rem !important; }
  .ms-lg-3 {
    margin-left: 1rem !important; }
  .ms-lg-4 {
    margin-left: 1.5rem !important; }
  .ms-lg-5 {
    margin-left: 3rem !important; }
  .ms-lg-auto {
    margin-left: auto !important; }
  .p-lg-0 {
    padding: 0 !important; }
  .p-lg-1 {
    padding: 0.25rem !important; }
  .p-lg-2 {
    padding: 0.5rem !important; }
  .p-lg-3 {
    padding: 1rem !important; }
  .p-lg-4 {
    padding: 1.5rem !important; }
  .p-lg-5 {
    padding: 3rem !important; }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .px-lg-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .px-lg-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .px-lg-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .px-lg-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .py-lg-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .py-lg-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .py-lg-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .py-lg-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .py-lg-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .pt-lg-0 {
    padding-top: 0 !important; }
  .pt-lg-1 {
    padding-top: 0.25rem !important; }
  .pt-lg-2 {
    padding-top: 0.5rem !important; }
  .pt-lg-3 {
    padding-top: 1rem !important; }
  .pt-lg-4 {
    padding-top: 1.5rem !important; }
  .pt-lg-5 {
    padding-top: 3rem !important; }
  .pe-lg-0 {
    padding-right: 0 !important; }
  .pe-lg-1 {
    padding-right: 0.25rem !important; }
  .pe-lg-2 {
    padding-right: 0.5rem !important; }
  .pe-lg-3 {
    padding-right: 1rem !important; }
  .pe-lg-4 {
    padding-right: 1.5rem !important; }
  .pe-lg-5 {
    padding-right: 3rem !important; }
  .pb-lg-0 {
    padding-bottom: 0 !important; }
  .pb-lg-1 {
    padding-bottom: 0.25rem !important; }
  .pb-lg-2 {
    padding-bottom: 0.5rem !important; }
  .pb-lg-3 {
    padding-bottom: 1rem !important; }
  .pb-lg-4 {
    padding-bottom: 1.5rem !important; }
  .pb-lg-5 {
    padding-bottom: 3rem !important; }
  .ps-lg-0 {
    padding-left: 0 !important; }
  .ps-lg-1 {
    padding-left: 0.25rem !important; }
  .ps-lg-2 {
    padding-left: 0.5rem !important; }
  .ps-lg-3 {
    padding-left: 1rem !important; }
  .ps-lg-4 {
    padding-left: 1.5rem !important; }
  .ps-lg-5 {
    padding-left: 3rem !important; }
  .text-lg-start {
    text-align: left !important; }
  .text-lg-end {
    text-align: right !important; }
  .text-lg-center {
    text-align: center !important; } }

@media (min-width: 1200px) {
  .float-xl-start {
    float: left !important; }
  .float-xl-end {
    float: right !important; }
  .float-xl-none {
    float: none !important; }
  .d-xl-inline {
    display: inline !important; }
  .d-xl-inline-block {
    display: inline-block !important; }
  .d-xl-block {
    display: block !important; }
  .d-xl-grid {
    display: -ms-grid !important;
    display: grid !important; }
  .d-xl-table {
    display: table !important; }
  .d-xl-table-row {
    display: table-row !important; }
  .d-xl-table-cell {
    display: table-cell !important; }
  .d-xl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-xl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-xl-none {
    display: none !important; }
  .flex-xl-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-xl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-xl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-xl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-xl-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-xl-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .gap-xl-0 {
    gap: 0 !important; }
  .gap-xl-1 {
    gap: 0.25rem !important; }
  .gap-xl-2 {
    gap: 0.5rem !important; }
  .gap-xl-3 {
    gap: 1rem !important; }
  .gap-xl-4 {
    gap: 1.5rem !important; }
  .gap-xl-5 {
    gap: 3rem !important; }
  .justify-content-xl-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-xl-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-xl-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-xl-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .justify-content-xl-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important; }
  .align-items-xl-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-xl-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-xl-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-xl-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-xl-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    -ms-grid-row-align: auto !important;
    align-self: auto !important; }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    -ms-grid-row-align: center !important;
    align-self: center !important; }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important; }
  .order-xl-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important; }
  .order-xl-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important; }
  .order-xl-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important; }
  .order-xl-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important; }
  .order-xl-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important; }
  .order-xl-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important; }
  .order-xl-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important; }
  .order-xl-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important; }
  .m-xl-0 {
    margin: 0 !important; }
  .m-xl-1 {
    margin: 0.25rem !important; }
  .m-xl-2 {
    margin: 0.5rem !important; }
  .m-xl-3 {
    margin: 1rem !important; }
  .m-xl-4 {
    margin: 1.5rem !important; }
  .m-xl-5 {
    margin: 3rem !important; }
  .m-xl-auto {
    margin: auto !important; }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .mx-xl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .mx-xl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .mx-xl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .mx-xl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .mx-xl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .my-xl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .my-xl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .my-xl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .my-xl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .my-xl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; }
  .mt-xl-0 {
    margin-top: 0 !important; }
  .mt-xl-1 {
    margin-top: 0.25rem !important; }
  .mt-xl-2 {
    margin-top: 0.5rem !important; }
  .mt-xl-3 {
    margin-top: 1rem !important; }
  .mt-xl-4 {
    margin-top: 1.5rem !important; }
  .mt-xl-5 {
    margin-top: 3rem !important; }
  .mt-xl-auto {
    margin-top: auto !important; }
  .me-xl-0 {
    margin-right: 0 !important; }
  .me-xl-1 {
    margin-right: 0.25rem !important; }
  .me-xl-2 {
    margin-right: 0.5rem !important; }
  .me-xl-3 {
    margin-right: 1rem !important; }
  .me-xl-4 {
    margin-right: 1.5rem !important; }
  .me-xl-5 {
    margin-right: 3rem !important; }
  .me-xl-auto {
    margin-right: auto !important; }
  .mb-xl-0 {
    margin-bottom: 0 !important; }
  .mb-xl-1 {
    margin-bottom: 0.25rem !important; }
  .mb-xl-2 {
    margin-bottom: 0.5rem !important; }
  .mb-xl-3 {
    margin-bottom: 1rem !important; }
  .mb-xl-4 {
    margin-bottom: 1.5rem !important; }
  .mb-xl-5 {
    margin-bottom: 3rem !important; }
  .mb-xl-auto {
    margin-bottom: auto !important; }
  .ms-xl-0 {
    margin-left: 0 !important; }
  .ms-xl-1 {
    margin-left: 0.25rem !important; }
  .ms-xl-2 {
    margin-left: 0.5rem !important; }
  .ms-xl-3 {
    margin-left: 1rem !important; }
  .ms-xl-4 {
    margin-left: 1.5rem !important; }
  .ms-xl-5 {
    margin-left: 3rem !important; }
  .ms-xl-auto {
    margin-left: auto !important; }
  .p-xl-0 {
    padding: 0 !important; }
  .p-xl-1 {
    padding: 0.25rem !important; }
  .p-xl-2 {
    padding: 0.5rem !important; }
  .p-xl-3 {
    padding: 1rem !important; }
  .p-xl-4 {
    padding: 1.5rem !important; }
  .p-xl-5 {
    padding: 3rem !important; }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .px-xl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .px-xl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .px-xl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .px-xl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .px-xl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .py-xl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .py-xl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .py-xl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .py-xl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .py-xl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .pt-xl-0 {
    padding-top: 0 !important; }
  .pt-xl-1 {
    padding-top: 0.25rem !important; }
  .pt-xl-2 {
    padding-top: 0.5rem !important; }
  .pt-xl-3 {
    padding-top: 1rem !important; }
  .pt-xl-4 {
    padding-top: 1.5rem !important; }
  .pt-xl-5 {
    padding-top: 3rem !important; }
  .pe-xl-0 {
    padding-right: 0 !important; }
  .pe-xl-1 {
    padding-right: 0.25rem !important; }
  .pe-xl-2 {
    padding-right: 0.5rem !important; }
  .pe-xl-3 {
    padding-right: 1rem !important; }
  .pe-xl-4 {
    padding-right: 1.5rem !important; }
  .pe-xl-5 {
    padding-right: 3rem !important; }
  .pb-xl-0 {
    padding-bottom: 0 !important; }
  .pb-xl-1 {
    padding-bottom: 0.25rem !important; }
  .pb-xl-2 {
    padding-bottom: 0.5rem !important; }
  .pb-xl-3 {
    padding-bottom: 1rem !important; }
  .pb-xl-4 {
    padding-bottom: 1.5rem !important; }
  .pb-xl-5 {
    padding-bottom: 3rem !important; }
  .ps-xl-0 {
    padding-left: 0 !important; }
  .ps-xl-1 {
    padding-left: 0.25rem !important; }
  .ps-xl-2 {
    padding-left: 0.5rem !important; }
  .ps-xl-3 {
    padding-left: 1rem !important; }
  .ps-xl-4 {
    padding-left: 1.5rem !important; }
  .ps-xl-5 {
    padding-left: 3rem !important; }
  .text-xl-start {
    text-align: left !important; }
  .text-xl-end {
    text-align: right !important; }
  .text-xl-center {
    text-align: center !important; } }

@media (min-width: 1400px) {
  .float-xxl-start {
    float: left !important; }
  .float-xxl-end {
    float: right !important; }
  .float-xxl-none {
    float: none !important; }
  .d-xxl-inline {
    display: inline !important; }
  .d-xxl-inline-block {
    display: inline-block !important; }
  .d-xxl-block {
    display: block !important; }
  .d-xxl-grid {
    display: -ms-grid !important;
    display: grid !important; }
  .d-xxl-table {
    display: table !important; }
  .d-xxl-table-row {
    display: table-row !important; }
  .d-xxl-table-cell {
    display: table-cell !important; }
  .d-xxl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-xxl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-xxl-none {
    display: none !important; }
  .flex-xxl-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-xxl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-xxl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-xxl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-xxl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-xxl-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-xxl-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-xxl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-xxl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .flex-xxl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-xxl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-xxl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .gap-xxl-0 {
    gap: 0 !important; }
  .gap-xxl-1 {
    gap: 0.25rem !important; }
  .gap-xxl-2 {
    gap: 0.5rem !important; }
  .gap-xxl-3 {
    gap: 1rem !important; }
  .gap-xxl-4 {
    gap: 1.5rem !important; }
  .gap-xxl-5 {
    gap: 3rem !important; }
  .justify-content-xxl-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-xxl-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-xxl-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-xxl-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-xxl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .justify-content-xxl-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important; }
  .align-items-xxl-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-xxl-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-xxl-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-xxl-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-xxl-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-xxl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-xxl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-xxl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-xxl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-xxl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-xxl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-xxl-auto {
    -ms-flex-item-align: auto !important;
    -ms-grid-row-align: auto !important;
    align-self: auto !important; }
  .align-self-xxl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-xxl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-xxl-center {
    -ms-flex-item-align: center !important;
    -ms-grid-row-align: center !important;
    align-self: center !important; }
  .align-self-xxl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-xxl-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important; }
  .order-xxl-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important; }
  .order-xxl-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important; }
  .order-xxl-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important; }
  .order-xxl-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important; }
  .order-xxl-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important; }
  .order-xxl-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important; }
  .order-xxl-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important; }
  .order-xxl-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important; }
  .m-xxl-0 {
    margin: 0 !important; }
  .m-xxl-1 {
    margin: 0.25rem !important; }
  .m-xxl-2 {
    margin: 0.5rem !important; }
  .m-xxl-3 {
    margin: 1rem !important; }
  .m-xxl-4 {
    margin: 1.5rem !important; }
  .m-xxl-5 {
    margin: 3rem !important; }
  .m-xxl-auto {
    margin: auto !important; }
  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .mx-xxl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .mx-xxl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .mx-xxl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .mx-xxl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .mx-xxl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .my-xxl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .my-xxl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .my-xxl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .my-xxl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .my-xxl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; }
  .mt-xxl-0 {
    margin-top: 0 !important; }
  .mt-xxl-1 {
    margin-top: 0.25rem !important; }
  .mt-xxl-2 {
    margin-top: 0.5rem !important; }
  .mt-xxl-3 {
    margin-top: 1rem !important; }
  .mt-xxl-4 {
    margin-top: 1.5rem !important; }
  .mt-xxl-5 {
    margin-top: 3rem !important; }
  .mt-xxl-auto {
    margin-top: auto !important; }
  .me-xxl-0 {
    margin-right: 0 !important; }
  .me-xxl-1 {
    margin-right: 0.25rem !important; }
  .me-xxl-2 {
    margin-right: 0.5rem !important; }
  .me-xxl-3 {
    margin-right: 1rem !important; }
  .me-xxl-4 {
    margin-right: 1.5rem !important; }
  .me-xxl-5 {
    margin-right: 3rem !important; }
  .me-xxl-auto {
    margin-right: auto !important; }
  .mb-xxl-0 {
    margin-bottom: 0 !important; }
  .mb-xxl-1 {
    margin-bottom: 0.25rem !important; }
  .mb-xxl-2 {
    margin-bottom: 0.5rem !important; }
  .mb-xxl-3 {
    margin-bottom: 1rem !important; }
  .mb-xxl-4 {
    margin-bottom: 1.5rem !important; }
  .mb-xxl-5 {
    margin-bottom: 3rem !important; }
  .mb-xxl-auto {
    margin-bottom: auto !important; }
  .ms-xxl-0 {
    margin-left: 0 !important; }
  .ms-xxl-1 {
    margin-left: 0.25rem !important; }
  .ms-xxl-2 {
    margin-left: 0.5rem !important; }
  .ms-xxl-3 {
    margin-left: 1rem !important; }
  .ms-xxl-4 {
    margin-left: 1.5rem !important; }
  .ms-xxl-5 {
    margin-left: 3rem !important; }
  .ms-xxl-auto {
    margin-left: auto !important; }
  .p-xxl-0 {
    padding: 0 !important; }
  .p-xxl-1 {
    padding: 0.25rem !important; }
  .p-xxl-2 {
    padding: 0.5rem !important; }
  .p-xxl-3 {
    padding: 1rem !important; }
  .p-xxl-4 {
    padding: 1.5rem !important; }
  .p-xxl-5 {
    padding: 3rem !important; }
  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .px-xxl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .px-xxl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .px-xxl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .px-xxl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .px-xxl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .py-xxl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .py-xxl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .py-xxl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .py-xxl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .py-xxl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .pt-xxl-0 {
    padding-top: 0 !important; }
  .pt-xxl-1 {
    padding-top: 0.25rem !important; }
  .pt-xxl-2 {
    padding-top: 0.5rem !important; }
  .pt-xxl-3 {
    padding-top: 1rem !important; }
  .pt-xxl-4 {
    padding-top: 1.5rem !important; }
  .pt-xxl-5 {
    padding-top: 3rem !important; }
  .pe-xxl-0 {
    padding-right: 0 !important; }
  .pe-xxl-1 {
    padding-right: 0.25rem !important; }
  .pe-xxl-2 {
    padding-right: 0.5rem !important; }
  .pe-xxl-3 {
    padding-right: 1rem !important; }
  .pe-xxl-4 {
    padding-right: 1.5rem !important; }
  .pe-xxl-5 {
    padding-right: 3rem !important; }
  .pb-xxl-0 {
    padding-bottom: 0 !important; }
  .pb-xxl-1 {
    padding-bottom: 0.25rem !important; }
  .pb-xxl-2 {
    padding-bottom: 0.5rem !important; }
  .pb-xxl-3 {
    padding-bottom: 1rem !important; }
  .pb-xxl-4 {
    padding-bottom: 1.5rem !important; }
  .pb-xxl-5 {
    padding-bottom: 3rem !important; }
  .ps-xxl-0 {
    padding-left: 0 !important; }
  .ps-xxl-1 {
    padding-left: 0.25rem !important; }
  .ps-xxl-2 {
    padding-left: 0.5rem !important; }
  .ps-xxl-3 {
    padding-left: 1rem !important; }
  .ps-xxl-4 {
    padding-left: 1.5rem !important; }
  .ps-xxl-5 {
    padding-left: 3rem !important; }
  .text-xxl-start {
    text-align: left !important; }
  .text-xxl-end {
    text-align: right !important; }
  .text-xxl-center {
    text-align: center !important; } }

@media (min-width: 1200px) {
  .fs-1 {
    font-size: 2.5rem !important; }
  .fs-2 {
    font-size: 2rem !important; }
  .fs-3 {
    font-size: 1.75rem !important; }
  .fs-4 {
    font-size: 1.5rem !important; } }

@media print {
  .d-print-inline {
    display: inline !important; }
  .d-print-inline-block {
    display: inline-block !important; }
  .d-print-block {
    display: block !important; }
  .d-print-grid {
    display: -ms-grid !important;
    display: grid !important; }
  .d-print-table {
    display: table !important; }
  .d-print-table-row {
    display: table-row !important; }
  .d-print-table-cell {
    display: table-cell !important; }
  .d-print-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-print-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-print-none {
    display: none !important; } }

.position-relative {
  position: relative; }

.logo {
  font-size: 24px;
  color: rgba(255, 255, 255, 0.8) !important;
  font-weight: 500; }
  .logo:hover {
    color: #fff !important; }

.site-nav {
  padding-top: 20px;
  padding-bottom: 20px;
  position: absolute;
  top: 0;
  z-index: 9;
  width: 100%; }
  .site-nav h1, .site-nav .h1 {
    margin: 0;
    padding: 0;
    font-size: 24px; }
  .site-nav .site-navigation .site-menu {
    margin-bottom: 0; }
    .site-nav .site-navigation .site-menu > li {
      display: inline-block; }
      .site-nav .site-navigation .site-menu > li > a {
        font-size: 14px;
        padding: 10px 15px;
        display: inline-block;
        text-decoration: none !important;
        color: rgba(255, 255, 255, 0.5); }
        .site-nav .site-navigation .site-menu > li > a:hover {
          color: #fff; }
      .site-nav .site-navigation .site-menu > li.cta-button a {
        padding: 6px 20px;
        border: 2px solid rgba(0, 0, 0, 0.1);
        color: #000;
        border-radius: 30px; }
        .site-nav .site-navigation .site-menu > li.cta-button a:hover {
          color: #000;
          background: #00204a;
          border-color: #00204a; }
      .site-nav .site-navigation .site-menu > li.active > a {
        color: #fff; }
    .site-nav .site-navigation .site-menu .has-children {
      position: relative; }
      .site-nav .site-navigation .site-menu .has-children > a {
        position: relative;
        padding-right: 20px; }
        .site-nav .site-navigation .site-menu .has-children > a:before {
          position: absolute;
          content: "\e313";
          font-size: 14px;
          top: 50%;
          right: 0;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
          font-family: 'icomoon'; }
      .site-nav .site-navigation .site-menu .has-children .dropdown {
        visibility: hidden;
        opacity: 0;
        top: 100%;
        z-index: 999;
        position: absolute;
        text-align: left;
        -webkit-box-shadow: 0 2px 10px -2px rgba(0, 0, 0, 0.1);
        box-shadow: 0 2px 10px -2px rgba(0, 0, 0, 0.1);
        padding: 20px 0;
        margin-top: 20px;
        margin-left: 0px;
        background: #fff;
        -webkit-transition: 0.2s 0s;
        -o-transition: 0.2s 0s;
        transition: 0.2s 0s; }
        .site-nav .site-navigation .site-menu .has-children .dropdown.arrow-top {
          position: absolute; }
          .site-nav .site-navigation .site-menu .has-children .dropdown.arrow-top:before {
            display: none;
            bottom: 100%;
            left: 20%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none; }
          .site-nav .site-navigation .site-menu .has-children .dropdown.arrow-top:before {
            display: none;
            border-color: rgba(136, 183, 213, 0);
            border-bottom-color: #fff;
            border-width: 10px;
            margin-left: -10px; }
        .site-nav .site-navigation .site-menu .has-children .dropdown a {
          font-size: 14px;
          text-transform: none;
          letter-spacing: normal;
          -webkit-transition: 0s all;
          -o-transition: 0s all;
          transition: 0s all;
          color: #000; }
        .site-nav .site-navigation .site-menu .has-children .dropdown .active a {
          color: #00204a !important; }
        .site-nav .site-navigation .site-menu .has-children .dropdown > li {
          list-style: none;
          padding: 0;
          margin: 0;
          min-width: 180px; }
          .site-nav .site-navigation .site-menu .has-children .dropdown > li > a {
            padding: 5px 20px;
            display: block; }
            .site-nav .site-navigation .site-menu .has-children .dropdown > li > a:hover {
              color: #00204a; }
          .site-nav .site-navigation .site-menu .has-children .dropdown > li.has-children > a:before {
            content: "\e315";
            right: 20px; }
          .site-nav .site-navigation .site-menu .has-children .dropdown > li.has-children > .dropdown, .site-nav .site-navigation .site-menu .has-children .dropdown > li.has-children > ul {
            left: 100%;
            top: 0; }
            .site-nav .site-navigation .site-menu .has-children .dropdown > li.has-children > .dropdown li a:hover, .site-nav .site-navigation .site-menu .has-children .dropdown > li.has-children > ul li a:hover {
              color: #00204a; }
          .site-nav .site-navigation .site-menu .has-children .dropdown > li.has-children:hover > a, .site-nav .site-navigation .site-menu .has-children .dropdown > li.has-children:active > a, .site-nav .site-navigation .site-menu .has-children .dropdown > li.has-children:focus > a {
            color: #00204a; }
      .site-nav .site-navigation .site-menu .has-children:hover > a, .site-nav .site-navigation .site-menu .has-children:focus > a, .site-nav .site-navigation .site-menu .has-children:active > a {
        color: #fff; }
      .site-nav .site-navigation .site-menu .has-children:hover, .site-nav .site-navigation .site-menu .has-children:focus, .site-nav .site-navigation .site-menu .has-children:active {
        cursor: pointer; }
        .site-nav .site-navigation .site-menu .has-children:hover > .dropdown, .site-nav .site-navigation .site-menu .has-children:focus > .dropdown, .site-nav .site-navigation .site-menu .has-children:active > .dropdown {
          -webkit-transition-delay: 0s;
          -o-transition-delay: 0s;
          transition-delay: 0s;
          margin-top: 0px;
          visibility: visible;
          opacity: 1; }

.site-mobile-menu-close {
  display: block;
  position: relative;
  height: 30px;
  width: 30px;
  z-index: 99;
  cursor: pointer;
  top: -20px; }
  .site-mobile-menu-close > span {
    cursor: pointer;
    display: block;
    position: absolute;
    height: 30px;
    width: 30px; }
    .site-mobile-menu-close > span:before, .site-mobile-menu-close > span:after {
      position: absolute;
      content: "";
      width: 2px;
      height: 30px;
      background: #000; }
    .site-mobile-menu-close > span:before {
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg); }
    .site-mobile-menu-close > span:after {
      -webkit-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
      transform: rotate(-45deg); }

.site-mobile-menu {
  width: 300px;
  position: fixed;
  right: 0;
  z-index: 2000;
  padding-top: 20px;
  background: #fff;
  height: calc(100vh);
  -webkit-transform: translateX(100%);
  -ms-transform: translateX(100%);
  transform: translateX(100%);
  -webkit-transition: 0.8s all cubic-bezier(0.23, 1, 0.32, 1);
  -o-transition: 0.8s all cubic-bezier(0.23, 1, 0.32, 1);
  transition: 0.8s all cubic-bezier(0.23, 1, 0.32, 1); }
  .offcanvas-menu .site-mobile-menu {
    -webkit-box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
    box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
    -webkit-transform: translateX(0%);
    -ms-transform: translateX(0%);
    transform: translateX(0%); }
  .site-mobile-menu .site-mobile-menu-header {
    width: 100%;
    float: left;
    padding-left: 20px;
    padding-right: 20px; }
    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close {
      float: right;
      margin-top: 8px; }
      .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span {
        font-size: 30px;
        display: inline-block;
        padding-left: 10px;
        padding-right: 0px;
        line-height: 1;
        cursor: pointer;
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo {
      float: left;
      margin-top: 10px;
      margin-left: 0px; }
      .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a {
        display: inline-block;
        text-transform: uppercase; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a img {
          max-width: 70px; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a:hover {
          text-decoration: none; }
  .site-mobile-menu .site-mobile-menu-body {
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
    position: relative;
    padding: 0 20px 20px 20px;
    height: calc(100vh - 52px);
    padding-bottom: 150px; }
  .site-mobile-menu .site-nav-wrap {
    padding: 0;
    margin: 0;
    list-style: none;
    position: relative; }
    .site-mobile-menu .site-nav-wrap a {
      padding: 5px 20px;
      display: block;
      position: relative;
      color: #000; }
      .site-mobile-menu .site-nav-wrap a:hover {
        color: #00204a; }
    .site-mobile-menu .site-nav-wrap li {
      position: relative;
      display: block; }
      .site-mobile-menu .site-nav-wrap li.active > a {
        color: #00204a; }
    .site-mobile-menu .site-nav-wrap .arrow-collapse {
      position: absolute;
      right: 0px;
      top: 0px;
      z-index: 20;
      width: 36px;
      height: 36px;
      text-align: center;
      cursor: pointer;
      border-radius: 50%;
      border: 1px solid #f8f9fa; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse:before {
        font-size: 14px;
        z-index: 20;
        font-family: "icomoon";
        content: "\e313";
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%) rotate(-180deg);
        -ms-transform: translate(-50%, -50%) rotate(-180deg);
        transform: translate(-50%, -50%) rotate(-180deg);
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse.collapsed:before {
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
    .site-mobile-menu .site-nav-wrap > li {
      display: block;
      position: relative;
      float: left;
      width: 100%; }
      .site-mobile-menu .site-nav-wrap > li > a {
        padding-left: 20px;
        font-size: 14px; }
      .site-mobile-menu .site-nav-wrap > li > ul {
        padding: 0;
        margin: 0;
        list-style: none; }
        .site-mobile-menu .site-nav-wrap > li > ul > li {
          display: block; }
          .site-mobile-menu .site-nav-wrap > li > ul > li > a {
            padding-left: 40px;
            font-size: 14px; }
          .site-mobile-menu .site-nav-wrap > li > ul > li > ul {
            padding: 0;
            margin: 0; }
            .site-mobile-menu .site-nav-wrap > li > ul > li > ul > li {
              display: block; }
              .site-mobile-menu .site-nav-wrap > li > ul > li > ul > li > a {
                font-size: 14px;
                padding-left: 60px; }

.sticky-wrapper {
  position: absolute;
  z-index: 100;
  width: 100%; }
  .sticky-wrapper .site-navbar {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
  .sticky-wrapper .site-navbar .site-menu-toggle {
    color: #000; }
  .sticky-wrapper .site-navbar .site-logo a {
    color: #000; }
  .sticky-wrapper .site-navbar .site-menu > li > a {
    color: rgba(0, 0, 0, 0.8) !important; }
    .sticky-wrapper .site-navbar .site-menu > li > a:hover, .sticky-wrapper .site-navbar .site-menu > li > a.active {
      color: #000 !important; }
  .sticky-wrapper.is-sticky .burger:before, .sticky-wrapper.is-sticky .burger span, .sticky-wrapper.is-sticky .burger:after {
    background: #000;
    -webkit-transition: .0s all ease;
    -o-transition: .0s all ease;
    transition: .0s all ease; }
  .sticky-wrapper.is-sticky .site-navbar {
    background: #000;
    border-bottom: 1px solid transparent;
    -webkit-box-shadow: 4px 0 20px -5px rgba(0, 0, 0, 0.1);
    box-shadow: 4px 0 20px -5px rgba(0, 0, 0, 0.1); }
    .sticky-wrapper.is-sticky .site-navbar .site-logo a {
      color: #000 !important; }
    .sticky-wrapper.is-sticky .site-navbar .site-menu > li > a {
      color: #000 !important; }
      .sticky-wrapper.is-sticky .site-navbar .site-menu > li > a:hover, .sticky-wrapper.is-sticky .site-navbar .site-menu > li > a.active {
        color: #00204a !important; }
    .sticky-wrapper.is-sticky .site-navbar .site-menu > li.active a {
      color: #00204a !important; }
  .sticky-wrapper .shrink {
    padding-top: 0px !important;
    padding-bottom: 0px !important; }

/* Burger */
.burger {
  width: 28px;
  height: 32px;
  cursor: pointer;
  position: relative; }
  .burger.light:before, .burger.light span, .burger.light:after {
    background: #fff; }

.burger:before, .burger span, .burger:after {
  width: 100%;
  height: 2px;
  display: block;
  background: #000;
  border-radius: 2px;
  position: absolute;
  opacity: 1; }

.burger:before, .burger:after {
  -webkit-transition: top 0.35s cubic-bezier(0.23, 1, 0.32, 1), opacity 0.35s cubic-bezier(0.23, 1, 0.32, 1), background-color 1.15s cubic-bezier(0.86, 0, 0.07, 1), -webkit-transform 0.35s cubic-bezier(0.23, 1, 0.32, 1);
  transition: top 0.35s cubic-bezier(0.23, 1, 0.32, 1), opacity 0.35s cubic-bezier(0.23, 1, 0.32, 1), background-color 1.15s cubic-bezier(0.86, 0, 0.07, 1), -webkit-transform 0.35s cubic-bezier(0.23, 1, 0.32, 1);
  -o-transition: top 0.35s cubic-bezier(0.23, 1, 0.32, 1), transform 0.35s cubic-bezier(0.23, 1, 0.32, 1), opacity 0.35s cubic-bezier(0.23, 1, 0.32, 1), background-color 1.15s cubic-bezier(0.86, 0, 0.07, 1);
  transition: top 0.35s cubic-bezier(0.23, 1, 0.32, 1), transform 0.35s cubic-bezier(0.23, 1, 0.32, 1), opacity 0.35s cubic-bezier(0.23, 1, 0.32, 1), background-color 1.15s cubic-bezier(0.86, 0, 0.07, 1);
  transition: top 0.35s cubic-bezier(0.23, 1, 0.32, 1), transform 0.35s cubic-bezier(0.23, 1, 0.32, 1), opacity 0.35s cubic-bezier(0.23, 1, 0.32, 1), background-color 1.15s cubic-bezier(0.86, 0, 0.07, 1), -webkit-transform 0.35s cubic-bezier(0.23, 1, 0.32, 1);
  -webkit-transition: top 0.35s cubic-bezier(0.23, 1, 0.32, 1), -webkit-transform 0.35s cubic-bezier(0.23, 1, 0.32, 1), opacity 0.35s cubic-bezier(0.23, 1, 0.32, 1), background-color 1.15s cubic-bezier(0.86, 0, 0.07, 1);
  content: ""; }

.burger:before {
  top: 4px; }

.burger span {
  top: 15px; }

.burger:after {
  top: 26px; }

/* Hover */
.burger:hover:before {
  top: 7px; }

.burger:hover:after {
  top: 23px; }

/* Click */
.burger.active span {
  opacity: 0; }

.burger.active:before, .burger.active:after {
  top: 40%; }

.burger.active:before {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=5);
  /*for IE*/ }

.burger.active:after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=-5);
  /*for IE*/ }

.burger:focus {
  outline: none; }

html {
  overflow-x: hidden; }

body {
  font-family: "Work Sans", sans-serif;
  font-weight: 400;
  font-size: 14px;
  overflow-x: hidden; }
  body:before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9;
    background-color: rgba(0, 0, 0, 0.5);
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    opacity: 0;
    visibility: hidden; }
  body.offcanvas-menu:before {
    opacity: 1;
    visibility: visible; }

h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, .logo {
  font-family: "Work Sans", sans-serif;
  color: #00204a; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  text-decoration: none; }

.form-control {
  font-size: 16px;
  height: 52px;
  padding-left: 15px;
  padding-right: 15px; }
  .form-control:hover, .form-control:active, .form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none; }

textarea {
  height: auto !important; }

#overlayer {
  width: 100%;
  height: 100%;
  position: fixed;
  z-index: 7100;
  background: #fff;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0; }
/* 
.loader { */
  /* z-index: 7700;
  position: fixed;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%); } */

.menu-bg-wrap {
  background-color: #005555;
  padding: 20px 30px;
  position: relative;
  float: left;
  width: 100%;
  border-radius: 7px;
  -webkit-box-shadow: 0 15px 30px -15px rgba(0, 0, 0, 0.1);
  box-shadow: 0 15px 30px -15px rgba(0, 0, 0, 0.1); }

.hero {
  position: relative;
  background-size: cover;
  background-position: cnter center;
  background-repeat: no-repeat;
  background-color: #00204a; }
  .hero.overlay {
    position: relative; }
    .hero.overlay:before {
      background-color: rgba(0, 0, 0, 0.5);
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
      z-index: 1; }
  .hero, .hero > .container > .row {
    height: 100vh;
    min-height: 600px; }
  .hero.page-inner, .hero.page-inner > .container > .row {
    height: 70vh;
    min-height: 300px; }
  .hero > .container {
    position: relative;
    z-index: 2; }
  .hero .heading {
    color: #fff;
    font-size: clamp(1.5rem, 2.5vw, 2.5rem);
    margin-bottom: 30px;
    font-weight: 600; }
  .hero .lead {
    color: #fff;
    font-size: 14px;
    margin-bottom: 30px; }
  .hero .narrow-w {
    max-width: 600px;
    margin: 0 auto; }
  .hero .form-search .form-control {
    padding-top: 18px;
    padding-bottom: 18px;
    padding-left: 20px;
    padding-right: 20px;
    border: none;
    border-radius: 30px; }
    .hero .form-search .form-control:hover, .hero .form-search .form-control:focus {
      outline: none;
      -webkit-box-shadow: none;
      box-shadow: none; }
  .hero .form-search .form-control {
    margin-right: 10px; }
  .hero .form-search .btn {
    background-color: #005555;
    padding-left: 30px;
    padding-right: 30px;
    color: #fff; }
    .hero .form-search .btn:hover, .hero .form-search .btn:focus {
      outline: none;
      -webkit-box-shadow: none;
      box-shadow: none; }

.hero-slide {
  top: 0;
  position: absolute;
  left: 0;
  right: 0; }
  .hero-slide .img {
    height: 100vh;
    min-height: 600px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center; }
    .hero-slide .img.overlay {
      position: relative; }
      .hero-slide .img.overlay:before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        z-index: 1;
        background: rgba(34, 34, 34, 0.4); }

.section {
  padding-top: 4rem;
  padding-bottom: 4rem; }
  .section .heading {
    font-weight: 500; }
    @media (max-width: 767.98px) {
      .section .heading {
        font-size: 36px; } }

.testimonial blockquote {
  font-style: 18px;
  color: #000; }

.bg-image {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed; }
  .bg-image.overlay {
    position: relative; }
    .bg-image.overlay:before {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
      z-index: 1;
      background: rgba(34, 34, 34, 0.97); }
  .bg-image > .container, .bg-image .custom-box {
    position: relative;
    z-index: 2; }

.btn {
  text-decoration: none !important;
  border-radius: 30px;
  padding-top: 15px;
  padding-bottom: 15px;
  padding-left: 30px;
  padding-right: 30px;
  border-width: 2px;
  border-color: transparent;
  border: none !important;
  top: 0;
  position: relative;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  .btn.btn-primary {
    background: #005555;
    color: #fff; }
  .btn:hover {
    top: -2px;
    -webkit-box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.1);
    box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.1); }

.hero-slider-wrap .tns-controls {
  position: absolute;
  z-index: 2; }
  .hero-slider-wrap .tns-controls button {
    background: none;
    border: none; }

.hero-slider-wrap .tns-nav {
  position: absolute;
  right: 20px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  z-index: 2; }
  .hero-slider-wrap .tns-nav button {
    background: none;
    border: none;
    display: block;
    margin: 2px;
    height: 15px; }
    .hero-slider-wrap .tns-nav button:active, .hero-slider-wrap .tns-nav button:focus {
      outline: none; }
    .hero-slider-wrap .tns-nav button:before {
      position: absolute;
      content: "";
      width: 15px;
      height: 2px;
      background-color: rgba(255, 255, 255, 0.5);
      right: 0;
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease; }
    .hero-slider-wrap .tns-nav button.tns-nav-active:before {
      background-color: #fff;
      width: 35px; }

.property-slider-wrap, .img-property-slide-wrap {
  position: relative; }
  .property-slider-wrap .tns-outer .tns-inner, .img-property-slide-wrap .tns-outer .tns-inner {
    padding-bottom: 100px !important; }
  .property-slider-wrap .tns-nav, .img-property-slide-wrap .tns-nav {
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: 40px;
    z-index: 2; }
    .property-slider-wrap .tns-nav button, .img-property-slide-wrap .tns-nav button {
      background: none;
      border: none;
      display: inline-block;
      margin: 2px;
      position: relative; }
      .property-slider-wrap .tns-nav button:active, .property-slider-wrap .tns-nav button:focus, .img-property-slide-wrap .tns-nav button:active, .img-property-slide-wrap .tns-nav button:focus {
        outline: none; }
      .property-slider-wrap .tns-nav button:before, .img-property-slide-wrap .tns-nav button:before {
        position: absolute;
        content: "";
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.2);
        right: 0;
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
      .property-slider-wrap .tns-nav button.tns-nav-active:before, .img-property-slide-wrap .tns-nav button.tns-nav-active:before {
        background-color: #00204a; }

.gradient-text {
  font-weight: 700;
  background: -webkit-gradient(linear, right top, left top, from(#f82a7e), to(#752a90));
  background: -webkit-linear-gradient(right, #f82a7e 0%, #752a90 100%);
  background: -o-linear-gradient(right, #f82a7e 0%, #752a90 100%);
  background: linear-gradient(270deg, #f82a7e 0%, #752a90 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent; }

.property-item.mb-30 {
  margin-bottom: 30px; }

.property-item .img {
  position: relative;
  z-index: 1; }

.property-item .property-content {
  background: #fff;
  padding: 30px;
  font-size: 13px;
  position: relative;
  width: 100%;
  margin-top: -100px;
  -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05);
  z-index: 2; }
  .property-item .property-content .price, .property-item .property-content .city {
    font-size: 20px;
    font-weight: 700;
    color: #000; }
  .property-item .property-content .price {
    color: #005555; }
    .property-item .property-content .price span {
      position: relative;
      padding-bottom: 4px;
      display: inline-block; }
      .property-item .property-content .price span:after {
        position: absolute;
        content: "";
        width: 100%;
        height: 2px;
        left: 0;
        bottom: 0;
        background-color: #005555; }
  .property-item .property-content .specs {
    font-size: 18px; }
    .property-item .property-content .specs .caption {
      font-size: 13px; }

.slider-nav {
  margin-top: -100px;
  position: relative; }
  .slider-nav span {
    cursor: pointer;
    display: inline-block;
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background-color: white; }

.section-2 {
  position: relative;
  background-color: #333;
  z-index: 2; }
  .section-2 .custom-box {
    position: relative;
    padding-top: 7rem;
    padding-bottom: 3rem;
    bottom: -30px; }

.section-3 {
  position: relative;
  z-index: 1;
  margin-top: -50px;
  padding-top: 10rem; }

.section-4 {
  background-color: #fff; }
  .section-4 .img-about {
    background-size: cover;
    background-position: center center; }
    .section-4 .img-about img {
      -o-object-fit: cover;
      object-fit: cover; }

.feature-h {
  margin-bottom: 30px; }
  .feature-h .wrap-icon {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 80px;
    flex: 0 0 80px;
    height: 80px;
    background: #efefef;
    color: #000;
    position: relative;
    border-radius: 50%;
    border: 2px solid transparent;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1); }
    .feature-h .wrap-icon [class^="icon-"] {
      position: absolute;
      left: 50%;
      font-size: 20px;
      top: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
  .feature-h .feature-text {
    margin-top: 15px; }
    .feature-h .feature-text .heading {
      font-size: 18px; }
  .feature-h:hover .wrap-icon, .feature-h:focus .wrap-icon {
    border: 2px solid #00204a;
    background-color: transparent;
    -webkit-transform: scale(1.07);
    -ms-transform: scale(1.07);
    transform: scale(1.07); }
  .feature-h:hover [class^="icon-"], .feature-h:focus [class^="icon-"] {
    color: #00204a; }

.img-about img {
  position: relative;
  z-index: 2; }

.img-about.dots {
  position: relative; }
  .img-about.dots:after {
    position: absolute;
    z-index: 1;
    bottom: -50px;
    right: -70px;
    content: "";
    width: 412px;
    height: 220px;
    background: url("../images/dots.png") no-repeat; }

.social a {
  text-decoration: none;
  position: relative;
  display: inline-block;
  width: 40px;
  height: 40px;
  color: #fff;
  background: #00204a;
  border-radius: 50%;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  border: 2px solid transparent;
  position: relative;
  top: 0; }
  .social a span {
    font-size: 13px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%); }
  .social a:hover {
    top: -5px;
    background: transparent;
    border: 2px solid #fff; }

.social.dark-hover a:hover {
  color: #00204a;
  border: 2px solid #00204a; }

.links-arrow-before li {
  margin-bottom: 15px;
  position: relative; }
  .links-arrow-before li a {
    color: #afafaf;
    position: relative;
    padding-left: 20px;
    text-decoration: none; }
    .links-arrow-before li a:hover {
      color: #fff; }
    .links-arrow-before li a:before {
      content: "\e5c8";
      font-family: "icomoon";
      left: 0;
      top: 0;
      position: absolute; }

.person {
  text-align: center;
  background-color: #fff;
  border-radius: 4px; }
  .person img {
    position: relative;
    width: 90px;
    border-radius: 50%;
    margin: -45px auto 0 auto; }
  .person .person-contents {
    padding: 30px; }
    .person .person-contents h2, .person .person-contents .h2 {
      font-size: 18px; }
      .person .person-contents h2 a, .person .person-contents .h2 a {
        color: #000;
        text-decoration: none; }
    .person .person-contents p {
      font-size: 14px; }

.meta {
  color: #888; }

.hero-slider-wrap {
  position: relative; }
  .hero-slider-wrap:hover #hero-nav {
    opacity: 1;
    visibility: visible; }

#hero-nav {
  position: absolute;
  z-index: 2;
  width: 100%;
  bottom: 110px;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  #hero-nav .prev, #hero-nav .next {
    position: absolute;
    font-size: 20px;
    color: rgba(255, 255, 255, 0.5);
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    cursor: pointer; }
    #hero-nav .prev:hover, #hero-nav .next:hover {
      color: white; }
  #hero-nav .prev {
    right: 60px; }
  #hero-nav .next {
    right: 20px; }

#property-nav {
  position: absolute;
  width: 100%;
  bottom: 64px; }
  #property-nav span {
    display: inline-block;
    cursor: pointer;
    padding: 7px 20px;
    border-radius: 30px;
    background: rgba(0, 32, 74, 0.1);
    color: #00204a;
    text-align: center;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
    #property-nav span:hover, #property-nav span.active {
      background: #00204a;
      color: #fff !important; }
  #property-nav .prev, #property-nav .next {
    position: absolute;
    cursor: pointer; }
    #property-nav .prev:hover, #property-nav .next:hover {
      color: #00204a; }
  #property-nav .prev {
    left: 0; }
  #property-nav .next {
    right: 0; }

.counter-wrap .number {
  font-size: 40px;
  display: block;
  font-weight: 700; }

.features-1 {
  padding-top: 30px;
  position: relative;
  z-index: 8;
  text-align: center;
  background-color: rgba(0, 32, 74, 0.05); }

.box-feature {
  background: #fff;
  border-radius: 4px;
  padding: 30px;
  margin-bottom: 30px; }
  .box-feature h3, .box-feature .h3 {
    font-size: 16px;
    margin: 0;
    padding: 0; }
  .box-feature [class^="flaticon-"] {
    color: #00204a;
    font-size: 60px;
    margin: 0 0 10px 0;
    display: block;
    padding: 0;
    line-height: 0; }

.custom-pagination a {
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  font-weight: 700;
  border-radius: 50%;
  background: rgba(0, 32, 74, 0.1);
  color: #00204a;
  text-align: center; }
  .custom-pagination a:hover, .custom-pagination a.active {
    background: #00204a;
    color: #fff; }

.agent-box {
  margin-top: 50px;
  border: 2px solid #efefef;
  padding: 20px;
  border-radius: 4px; }
  .agent-box .img {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100px;
    flex: 0 0 100px; }
    .agent-box .img img {
      width: 80px;
      border-radius: 50%; }
  .agent-box .text h3, .agent-box .text .h3 {
    font-size: 16px; }

.testimonial-slider-wrap {
  position: relative; }
  .testimonial-slider-wrap .tns-nav {
    position: absolute;
    bottom: -50px;
    z-index: 2;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%); }
    .testimonial-slider-wrap .tns-nav button {
      background: none;
      border: none;
      display: inline-block;
      margin: 2px;
      height: 15px; }
      .testimonial-slider-wrap .tns-nav button:active, .testimonial-slider-wrap .tns-nav button:focus {
        outline: none; }
      .testimonial-slider-wrap .tns-nav button:before {
        position: absolute;
        content: "";
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.3);
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
      .testimonial-slider-wrap .tns-nav button.tns-nav-active:before {
        background-color: #00204a; }

#testimonial-nav span {
  display: inline-block;
  cursor: pointer;
  padding: 7px 20px;
  border-radius: 30px;
  background: rgba(0, 32, 74, 0.1);
  color: #00204a;
  text-align: center;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  #testimonial-nav span:hover, #testimonial-nav span.active {
    background: #00204a;
    color: #fff !important; }

.custom-mb {
  margin-bottom: 80px; }

.has-arrow {
  text-decoration: underline;
  position: relative; }
  .has-arrow:hover {
    text-decoration: none; }
  .has-arrow [class^="icon-"] {
    position: relative;
    display: inline-block;
    margin-left: 10px;
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
    top: 2px; }

nav[aria-label="breadcrumb"] a {
  color: #fff; }

nav[aria-label="breadcrumb"] li:before {
  color: rgba(255, 255, 255, 0.3) !important; }

.learn-more {
  position: relative;
  display: inline-block;
  padding-bottom: 10px; }
  .learn-more:before {
    content: "";
    position: absolute;
    left: 0;
    width: 100%;
    bottom: 0;
    height: 2px;
    background-color: #005555;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
  .learn-more:hover:before {
    width: 0%; }

.sec-testimonials {
  padding-bottom: 8rem; }

.contact-info i {
  font-size: 20px;
  float: left;
  width: 44px;
  height: 44px;
  background: #00204a;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  border-radius: 50px;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  color: #fff; }

.contact-info h4, .contact-info .h4 {
  font-size: 18px;
  padding: 0 0 0 60px; }

.contact-info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px; }

.site-footer {
  background: #efefef;
  font-size: 14px;
  color: #888;
  padding: 70px 0; }
  .site-footer a {
    color: #777;
    position: relative;
    display: inline-block;
    text-decoration: underline; }
    .site-footer a:hover {
      color: #000;
      text-decoration: none; }
      .site-footer a:hover:before {
        background: #00204a; }
  .site-footer .footer-cta h2, .site-footer .footer-cta .h2 {
    font-size: 30px;
    color: #00204a; }
  .site-footer .btn:before {
    display: none; }
  .site-footer .widget {
    margin-bottom: 40px;
    display: block; }
    .site-footer .widget h3, .site-footer .widget .h3 {
      font-size: 12px;
      font-weight: 700;
      text-transform: uppercase;
      margin-bottom: 15px;
      color: #00204a; }
    .site-footer .widget .links {
      width: 150px; }
      .site-footer .widget .links li {
        margin-bottom: 10px; }
  .site-footer .social li {
    display: inline-block; }
    .site-footer .social li a {
      display: inline-block;
      width: 40px;
      height: 40px;
      position: relative;
      background: #ccc;
      border-radius: 40%; }
      .site-footer .social li a:before {
        display: none; }
      .site-footer .social li a > span {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
      .site-footer .social li a:hover {
        background: #00204a;
        color: #fff; }

        /* aos */
        [data-aos][data-aos][data-aos-duration="50"],body[data-aos-duration="50"] [data-aos]{transition-duration:50ms}[data-aos][data-aos][data-aos-delay="50"],body[data-aos-delay="50"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="50"].aos-animate,body[data-aos-delay="50"] [data-aos].aos-animate{transition-delay:50ms}[data-aos][data-aos][data-aos-duration="100"],body[data-aos-duration="100"] [data-aos]{transition-duration:.1s}[data-aos][data-aos][data-aos-delay="100"],body[data-aos-delay="100"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="100"].aos-animate,body[data-aos-delay="100"] [data-aos].aos-animate{transition-delay:.1s}[data-aos][data-aos][data-aos-duration="150"],body[data-aos-duration="150"] [data-aos]{transition-duration:.15s}[data-aos][data-aos][data-aos-delay="150"],body[data-aos-delay="150"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="150"].aos-animate,body[data-aos-delay="150"] [data-aos].aos-animate{transition-delay:.15s}[data-aos][data-aos][data-aos-duration="200"],body[data-aos-duration="200"] [data-aos]{transition-duration:.2s}[data-aos][data-aos][data-aos-delay="200"],body[data-aos-delay="200"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="200"].aos-animate,body[data-aos-delay="200"] [data-aos].aos-animate{transition-delay:.2s}[data-aos][data-aos][data-aos-duration="250"],body[data-aos-duration="250"] [data-aos]{transition-duration:.25s}[data-aos][data-aos][data-aos-delay="250"],body[data-aos-delay="250"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="250"].aos-animate,body[data-aos-delay="250"] [data-aos].aos-animate{transition-delay:.25s}[data-aos][data-aos][data-aos-duration="300"],body[data-aos-duration="300"] [data-aos]{transition-duration:.3s}[data-aos][data-aos][data-aos-delay="300"],body[data-aos-delay="300"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="300"].aos-animate,body[data-aos-delay="300"] [data-aos].aos-animate{transition-delay:.3s}[data-aos][data-aos][data-aos-duration="350"],body[data-aos-duration="350"] [data-aos]{transition-duration:.35s}[data-aos][data-aos][data-aos-delay="350"],body[data-aos-delay="350"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="350"].aos-animate,body[data-aos-delay="350"] [data-aos].aos-animate{transition-delay:.35s}[data-aos][data-aos][data-aos-duration="400"],body[data-aos-duration="400"] [data-aos]{transition-duration:.4s}[data-aos][data-aos][data-aos-delay="400"],body[data-aos-delay="400"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="400"].aos-animate,body[data-aos-delay="400"] [data-aos].aos-animate{transition-delay:.4s}[data-aos][data-aos][data-aos-duration="450"],body[data-aos-duration="450"] [data-aos]{transition-duration:.45s}[data-aos][data-aos][data-aos-delay="450"],body[data-aos-delay="450"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="450"].aos-animate,body[data-aos-delay="450"] [data-aos].aos-animate{transition-delay:.45s}[data-aos][data-aos][data-aos-duration="500"],body[data-aos-duration="500"] [data-aos]{transition-duration:.5s}[data-aos][data-aos][data-aos-delay="500"],body[data-aos-delay="500"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="500"].aos-animate,body[data-aos-delay="500"] [data-aos].aos-animate{transition-delay:.5s}[data-aos][data-aos][data-aos-duration="550"],body[data-aos-duration="550"] [data-aos]{transition-duration:.55s}[data-aos][data-aos][data-aos-delay="550"],body[data-aos-delay="550"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="550"].aos-animate,body[data-aos-delay="550"] [data-aos].aos-animate{transition-delay:.55s}[data-aos][data-aos][data-aos-duration="600"],body[data-aos-duration="600"] [data-aos]{transition-duration:.6s}[data-aos][data-aos][data-aos-delay="600"],body[data-aos-delay="600"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="600"].aos-animate,body[data-aos-delay="600"] [data-aos].aos-animate{transition-delay:.6s}[data-aos][data-aos][data-aos-duration="650"],body[data-aos-duration="650"] [data-aos]{transition-duration:.65s}[data-aos][data-aos][data-aos-delay="650"],body[data-aos-delay="650"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="650"].aos-animate,body[data-aos-delay="650"] [data-aos].aos-animate{transition-delay:.65s}[data-aos][data-aos][data-aos-duration="700"],body[data-aos-duration="700"] [data-aos]{transition-duration:.7s}[data-aos][data-aos][data-aos-delay="700"],body[data-aos-delay="700"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="700"].aos-animate,body[data-aos-delay="700"] [data-aos].aos-animate{transition-delay:.7s}[data-aos][data-aos][data-aos-duration="750"],body[data-aos-duration="750"] [data-aos]{transition-duration:.75s}[data-aos][data-aos][data-aos-delay="750"],body[data-aos-delay="750"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="750"].aos-animate,body[data-aos-delay="750"] [data-aos].aos-animate{transition-delay:.75s}[data-aos][data-aos][data-aos-duration="800"],body[data-aos-duration="800"] [data-aos]{transition-duration:.8s}[data-aos][data-aos][data-aos-delay="800"],body[data-aos-delay="800"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="800"].aos-animate,body[data-aos-delay="800"] [data-aos].aos-animate{transition-delay:.8s}[data-aos][data-aos][data-aos-duration="850"],body[data-aos-duration="850"] [data-aos]{transition-duration:.85s}[data-aos][data-aos][data-aos-delay="850"],body[data-aos-delay="850"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="850"].aos-animate,body[data-aos-delay="850"] [data-aos].aos-animate{transition-delay:.85s}[data-aos][data-aos][data-aos-duration="900"],body[data-aos-duration="900"] [data-aos]{transition-duration:.9s}[data-aos][data-aos][data-aos-delay="900"],body[data-aos-delay="900"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="900"].aos-animate,body[data-aos-delay="900"] [data-aos].aos-animate{transition-delay:.9s}[data-aos][data-aos][data-aos-duration="950"],body[data-aos-duration="950"] [data-aos]{transition-duration:.95s}[data-aos][data-aos][data-aos-delay="950"],body[data-aos-delay="950"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="950"].aos-animate,body[data-aos-delay="950"] [data-aos].aos-animate{transition-delay:.95s}[data-aos][data-aos][data-aos-duration="1000"],body[data-aos-duration="1000"] [data-aos]{transition-duration:1s}[data-aos][data-aos][data-aos-delay="1000"],body[data-aos-delay="1000"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1000"].aos-animate,body[data-aos-delay="1000"] [data-aos].aos-animate{transition-delay:1s}[data-aos][data-aos][data-aos-duration="1050"],body[data-aos-duration="1050"] [data-aos]{transition-duration:1.05s}[data-aos][data-aos][data-aos-delay="1050"],body[data-aos-delay="1050"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1050"].aos-animate,body[data-aos-delay="1050"] [data-aos].aos-animate{transition-delay:1.05s}[data-aos][data-aos][data-aos-duration="1100"],body[data-aos-duration="1100"] [data-aos]{transition-duration:1.1s}[data-aos][data-aos][data-aos-delay="1100"],body[data-aos-delay="1100"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1100"].aos-animate,body[data-aos-delay="1100"] [data-aos].aos-animate{transition-delay:1.1s}[data-aos][data-aos][data-aos-duration="1150"],body[data-aos-duration="1150"] [data-aos]{transition-duration:1.15s}[data-aos][data-aos][data-aos-delay="1150"],body[data-aos-delay="1150"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1150"].aos-animate,body[data-aos-delay="1150"] [data-aos].aos-animate{transition-delay:1.15s}[data-aos][data-aos][data-aos-duration="1200"],body[data-aos-duration="1200"] [data-aos]{transition-duration:1.2s}[data-aos][data-aos][data-aos-delay="1200"],body[data-aos-delay="1200"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1200"].aos-animate,body[data-aos-delay="1200"] [data-aos].aos-animate{transition-delay:1.2s}[data-aos][data-aos][data-aos-duration="1250"],body[data-aos-duration="1250"] [data-aos]{transition-duration:1.25s}[data-aos][data-aos][data-aos-delay="1250"],body[data-aos-delay="1250"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1250"].aos-animate,body[data-aos-delay="1250"] [data-aos].aos-animate{transition-delay:1.25s}[data-aos][data-aos][data-aos-duration="1300"],body[data-aos-duration="1300"] [data-aos]{transition-duration:1.3s}[data-aos][data-aos][data-aos-delay="1300"],body[data-aos-delay="1300"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1300"].aos-animate,body[data-aos-delay="1300"] [data-aos].aos-animate{transition-delay:1.3s}[data-aos][data-aos][data-aos-duration="1350"],body[data-aos-duration="1350"] [data-aos]{transition-duration:1.35s}[data-aos][data-aos][data-aos-delay="1350"],body[data-aos-delay="1350"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1350"].aos-animate,body[data-aos-delay="1350"] [data-aos].aos-animate{transition-delay:1.35s}[data-aos][data-aos][data-aos-duration="1400"],body[data-aos-duration="1400"] [data-aos]{transition-duration:1.4s}[data-aos][data-aos][data-aos-delay="1400"],body[data-aos-delay="1400"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1400"].aos-animate,body[data-aos-delay="1400"] [data-aos].aos-animate{transition-delay:1.4s}[data-aos][data-aos][data-aos-duration="1450"],body[data-aos-duration="1450"] [data-aos]{transition-duration:1.45s}[data-aos][data-aos][data-aos-delay="1450"],body[data-aos-delay="1450"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1450"].aos-animate,body[data-aos-delay="1450"] [data-aos].aos-animate{transition-delay:1.45s}[data-aos][data-aos][data-aos-duration="1500"],body[data-aos-duration="1500"] [data-aos]{transition-duration:1.5s}[data-aos][data-aos][data-aos-delay="1500"],body[data-aos-delay="1500"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1500"].aos-animate,body[data-aos-delay="1500"] [data-aos].aos-animate{transition-delay:1.5s}[data-aos][data-aos][data-aos-duration="1550"],body[data-aos-duration="1550"] [data-aos]{transition-duration:1.55s}[data-aos][data-aos][data-aos-delay="1550"],body[data-aos-delay="1550"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1550"].aos-animate,body[data-aos-delay="1550"] [data-aos].aos-animate{transition-delay:1.55s}[data-aos][data-aos][data-aos-duration="1600"],body[data-aos-duration="1600"] [data-aos]{transition-duration:1.6s}[data-aos][data-aos][data-aos-delay="1600"],body[data-aos-delay="1600"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1600"].aos-animate,body[data-aos-delay="1600"] [data-aos].aos-animate{transition-delay:1.6s}[data-aos][data-aos][data-aos-duration="1650"],body[data-aos-duration="1650"] [data-aos]{transition-duration:1.65s}[data-aos][data-aos][data-aos-delay="1650"],body[data-aos-delay="1650"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1650"].aos-animate,body[data-aos-delay="1650"] [data-aos].aos-animate{transition-delay:1.65s}[data-aos][data-aos][data-aos-duration="1700"],body[data-aos-duration="1700"] [data-aos]{transition-duration:1.7s}[data-aos][data-aos][data-aos-delay="1700"],body[data-aos-delay="1700"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1700"].aos-animate,body[data-aos-delay="1700"] [data-aos].aos-animate{transition-delay:1.7s}[data-aos][data-aos][data-aos-duration="1750"],body[data-aos-duration="1750"] [data-aos]{transition-duration:1.75s}[data-aos][data-aos][data-aos-delay="1750"],body[data-aos-delay="1750"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1750"].aos-animate,body[data-aos-delay="1750"] [data-aos].aos-animate{transition-delay:1.75s}[data-aos][data-aos][data-aos-duration="1800"],body[data-aos-duration="1800"] [data-aos]{transition-duration:1.8s}[data-aos][data-aos][data-aos-delay="1800"],body[data-aos-delay="1800"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1800"].aos-animate,body[data-aos-delay="1800"] [data-aos].aos-animate{transition-delay:1.8s}[data-aos][data-aos][data-aos-duration="1850"],body[data-aos-duration="1850"] [data-aos]{transition-duration:1.85s}[data-aos][data-aos][data-aos-delay="1850"],body[data-aos-delay="1850"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1850"].aos-animate,body[data-aos-delay="1850"] [data-aos].aos-animate{transition-delay:1.85s}[data-aos][data-aos][data-aos-duration="1900"],body[data-aos-duration="1900"] [data-aos]{transition-duration:1.9s}[data-aos][data-aos][data-aos-delay="1900"],body[data-aos-delay="1900"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1900"].aos-animate,body[data-aos-delay="1900"] [data-aos].aos-animate{transition-delay:1.9s}[data-aos][data-aos][data-aos-duration="1950"],body[data-aos-duration="1950"] [data-aos]{transition-duration:1.95s}[data-aos][data-aos][data-aos-delay="1950"],body[data-aos-delay="1950"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1950"].aos-animate,body[data-aos-delay="1950"] [data-aos].aos-animate{transition-delay:1.95s}[data-aos][data-aos][data-aos-duration="2000"],body[data-aos-duration="2000"] [data-aos]{transition-duration:2s}[data-aos][data-aos][data-aos-delay="2000"],body[data-aos-delay="2000"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2000"].aos-animate,body[data-aos-delay="2000"] [data-aos].aos-animate{transition-delay:2s}[data-aos][data-aos][data-aos-duration="2050"],body[data-aos-duration="2050"] [data-aos]{transition-duration:2.05s}[data-aos][data-aos][data-aos-delay="2050"],body[data-aos-delay="2050"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2050"].aos-animate,body[data-aos-delay="2050"] [data-aos].aos-animate{transition-delay:2.05s}[data-aos][data-aos][data-aos-duration="2100"],body[data-aos-duration="2100"] [data-aos]{transition-duration:2.1s}[data-aos][data-aos][data-aos-delay="2100"],body[data-aos-delay="2100"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2100"].aos-animate,body[data-aos-delay="2100"] [data-aos].aos-animate{transition-delay:2.1s}[data-aos][data-aos][data-aos-duration="2150"],body[data-aos-duration="2150"] [data-aos]{transition-duration:2.15s}[data-aos][data-aos][data-aos-delay="2150"],body[data-aos-delay="2150"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2150"].aos-animate,body[data-aos-delay="2150"] [data-aos].aos-animate{transition-delay:2.15s}[data-aos][data-aos][data-aos-duration="2200"],body[data-aos-duration="2200"] [data-aos]{transition-duration:2.2s}[data-aos][data-aos][data-aos-delay="2200"],body[data-aos-delay="2200"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2200"].aos-animate,body[data-aos-delay="2200"] [data-aos].aos-animate{transition-delay:2.2s}[data-aos][data-aos][data-aos-duration="2250"],body[data-aos-duration="2250"] [data-aos]{transition-duration:2.25s}[data-aos][data-aos][data-aos-delay="2250"],body[data-aos-delay="2250"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2250"].aos-animate,body[data-aos-delay="2250"] [data-aos].aos-animate{transition-delay:2.25s}[data-aos][data-aos][data-aos-duration="2300"],body[data-aos-duration="2300"] [data-aos]{transition-duration:2.3s}[data-aos][data-aos][data-aos-delay="2300"],body[data-aos-delay="2300"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2300"].aos-animate,body[data-aos-delay="2300"] [data-aos].aos-animate{transition-delay:2.3s}[data-aos][data-aos][data-aos-duration="2350"],body[data-aos-duration="2350"] [data-aos]{transition-duration:2.35s}[data-aos][data-aos][data-aos-delay="2350"],body[data-aos-delay="2350"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2350"].aos-animate,body[data-aos-delay="2350"] [data-aos].aos-animate{transition-delay:2.35s}[data-aos][data-aos][data-aos-duration="2400"],body[data-aos-duration="2400"] [data-aos]{transition-duration:2.4s}[data-aos][data-aos][data-aos-delay="2400"],body[data-aos-delay="2400"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2400"].aos-animate,body[data-aos-delay="2400"] [data-aos].aos-animate{transition-delay:2.4s}[data-aos][data-aos][data-aos-duration="2450"],body[data-aos-duration="2450"] [data-aos]{transition-duration:2.45s}[data-aos][data-aos][data-aos-delay="2450"],body[data-aos-delay="2450"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2450"].aos-animate,body[data-aos-delay="2450"] [data-aos].aos-animate{transition-delay:2.45s}[data-aos][data-aos][data-aos-duration="2500"],body[data-aos-duration="2500"] [data-aos]{transition-duration:2.5s}[data-aos][data-aos][data-aos-delay="2500"],body[data-aos-delay="2500"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2500"].aos-animate,body[data-aos-delay="2500"] [data-aos].aos-animate{transition-delay:2.5s}[data-aos][data-aos][data-aos-duration="2550"],body[data-aos-duration="2550"] [data-aos]{transition-duration:2.55s}[data-aos][data-aos][data-aos-delay="2550"],body[data-aos-delay="2550"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2550"].aos-animate,body[data-aos-delay="2550"] [data-aos].aos-animate{transition-delay:2.55s}[data-aos][data-aos][data-aos-duration="2600"],body[data-aos-duration="2600"] [data-aos]{transition-duration:2.6s}[data-aos][data-aos][data-aos-delay="2600"],body[data-aos-delay="2600"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2600"].aos-animate,body[data-aos-delay="2600"] [data-aos].aos-animate{transition-delay:2.6s}[data-aos][data-aos][data-aos-duration="2650"],body[data-aos-duration="2650"] [data-aos]{transition-duration:2.65s}[data-aos][data-aos][data-aos-delay="2650"],body[data-aos-delay="2650"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2650"].aos-animate,body[data-aos-delay="2650"] [data-aos].aos-animate{transition-delay:2.65s}[data-aos][data-aos][data-aos-duration="2700"],body[data-aos-duration="2700"] [data-aos]{transition-duration:2.7s}[data-aos][data-aos][data-aos-delay="2700"],body[data-aos-delay="2700"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2700"].aos-animate,body[data-aos-delay="2700"] [data-aos].aos-animate{transition-delay:2.7s}[data-aos][data-aos][data-aos-duration="2750"],body[data-aos-duration="2750"] [data-aos]{transition-duration:2.75s}[data-aos][data-aos][data-aos-delay="2750"],body[data-aos-delay="2750"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2750"].aos-animate,body[data-aos-delay="2750"] [data-aos].aos-animate{transition-delay:2.75s}[data-aos][data-aos][data-aos-duration="2800"],body[data-aos-duration="2800"] [data-aos]{transition-duration:2.8s}[data-aos][data-aos][data-aos-delay="2800"],body[data-aos-delay="2800"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2800"].aos-animate,body[data-aos-delay="2800"] [data-aos].aos-animate{transition-delay:2.8s}[data-aos][data-aos][data-aos-duration="2850"],body[data-aos-duration="2850"] [data-aos]{transition-duration:2.85s}[data-aos][data-aos][data-aos-delay="2850"],body[data-aos-delay="2850"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2850"].aos-animate,body[data-aos-delay="2850"] [data-aos].aos-animate{transition-delay:2.85s}[data-aos][data-aos][data-aos-duration="2900"],body[data-aos-duration="2900"] [data-aos]{transition-duration:2.9s}[data-aos][data-aos][data-aos-delay="2900"],body[data-aos-delay="2900"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2900"].aos-animate,body[data-aos-delay="2900"] [data-aos].aos-animate{transition-delay:2.9s}[data-aos][data-aos][data-aos-duration="2950"],body[data-aos-duration="2950"] [data-aos]{transition-duration:2.95s}[data-aos][data-aos][data-aos-delay="2950"],body[data-aos-delay="2950"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2950"].aos-animate,body[data-aos-delay="2950"] [data-aos].aos-animate{transition-delay:2.95s}[data-aos][data-aos][data-aos-duration="3000"],body[data-aos-duration="3000"] [data-aos]{transition-duration:3s}[data-aos][data-aos][data-aos-delay="3000"],body[data-aos-delay="3000"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="3000"].aos-animate,body[data-aos-delay="3000"] [data-aos].aos-animate{transition-delay:3s}[data-aos][data-aos][data-aos-easing=linear],body[data-aos-easing=linear] [data-aos]{transition-timing-function:cubic-bezier(.25,.25,.75,.75)}[data-aos][data-aos][data-aos-easing=ease],body[data-aos-easing=ease] [data-aos]{transition-timing-function:ease}[data-aos][data-aos][data-aos-easing=ease-in],body[data-aos-easing=ease-in] [data-aos]{transition-timing-function:ease-in}[data-aos][data-aos][data-aos-easing=ease-out],body[data-aos-easing=ease-out] [data-aos]{transition-timing-function:ease-out}[data-aos][data-aos][data-aos-easing=ease-in-out],body[data-aos-easing=ease-in-out] [data-aos]{transition-timing-function:ease-in-out}[data-aos][data-aos][data-aos-easing=ease-in-back],body[data-aos-easing=ease-in-back] [data-aos]{transition-timing-function:cubic-bezier(.6,-.28,.735,.045)}[data-aos][data-aos][data-aos-easing=ease-out-back],body[data-aos-easing=ease-out-back] [data-aos]{transition-timing-function:cubic-bezier(.175,.885,.32,1.275)}[data-aos][data-aos][data-aos-easing=ease-in-out-back],body[data-aos-easing=ease-in-out-back] [data-aos]{transition-timing-function:cubic-bezier(.68,-.55,.265,1.55)}[data-aos][data-aos][data-aos-easing=ease-in-sine],body[data-aos-easing=ease-in-sine] [data-aos]{transition-timing-function:cubic-bezier(.47,0,.745,.715)}[data-aos][data-aos][data-aos-easing=ease-out-sine],body[data-aos-easing=ease-out-sine] [data-aos]{transition-timing-function:cubic-bezier(.39,.575,.565,1)}[data-aos][data-aos][data-aos-easing=ease-in-out-sine],body[data-aos-easing=ease-in-out-sine] [data-aos]{transition-timing-function:cubic-bezier(.445,.05,.55,.95)}[data-aos][data-aos][data-aos-easing=ease-in-quad],body[data-aos-easing=ease-in-quad] [data-aos]{transition-timing-function:cubic-bezier(.55,.085,.68,.53)}[data-aos][data-aos][data-aos-easing=ease-out-quad],body[data-aos-easing=ease-out-quad] [data-aos]{transition-timing-function:cubic-bezier(.25,.46,.45,.94)}[data-aos][data-aos][data-aos-easing=ease-in-out-quad],body[data-aos-easing=ease-in-out-quad] [data-aos]{transition-timing-function:cubic-bezier(.455,.03,.515,.955)}[data-aos][data-aos][data-aos-easing=ease-in-cubic],body[data-aos-easing=ease-in-cubic] [data-aos]{transition-timing-function:cubic-bezier(.55,.085,.68,.53)}[data-aos][data-aos][data-aos-easing=ease-out-cubic],body[data-aos-easing=ease-out-cubic] [data-aos]{transition-timing-function:cubic-bezier(.25,.46,.45,.94)}[data-aos][data-aos][data-aos-easing=ease-in-out-cubic],body[data-aos-easing=ease-in-out-cubic] [data-aos]{transition-timing-function:cubic-bezier(.455,.03,.515,.955)}[data-aos][data-aos][data-aos-easing=ease-in-quart],body[data-aos-easing=ease-in-quart] [data-aos]{transition-timing-function:cubic-bezier(.55,.085,.68,.53)}[data-aos][data-aos][data-aos-easing=ease-out-quart],body[data-aos-easing=ease-out-quart] [data-aos]{transition-timing-function:cubic-bezier(.25,.46,.45,.94)}[data-aos][data-aos][data-aos-easing=ease-in-out-quart],body[data-aos-easing=ease-in-out-quart] [data-aos]{transition-timing-function:cubic-bezier(.455,.03,.515,.955)}[data-aos^=fade][data-aos^=fade]{opacity:0;transition-property:opacity,transform}[data-aos^=fade][data-aos^=fade].aos-animate{opacity:1;transform:translateZ(0)}[data-aos=fade-up]{transform:translate3d(0,100px,0)}[data-aos=fade-down]{transform:translate3d(0,-100px,0)}[data-aos=fade-right]{transform:translate3d(-100px,0,0)}[data-aos=fade-left]{transform:translate3d(100px,0,0)}[data-aos=fade-up-right]{transform:translate3d(-100px,100px,0)}[data-aos=fade-up-left]{transform:translate3d(100px,100px,0)}[data-aos=fade-down-right]{transform:translate3d(-100px,-100px,0)}[data-aos=fade-down-left]{transform:translate3d(100px,-100px,0)}[data-aos^=zoom][data-aos^=zoom]{opacity:0;transition-property:opacity,transform}[data-aos^=zoom][data-aos^=zoom].aos-animate{opacity:1;transform:translateZ(0) scale(1)}[data-aos=zoom-in]{transform:scale(.6)}[data-aos=zoom-in-up]{transform:translate3d(0,100px,0) scale(.6)}[data-aos=zoom-in-down]{transform:translate3d(0,-100px,0) scale(.6)}[data-aos=zoom-in-right]{transform:translate3d(-100px,0,0) scale(.6)}[data-aos=zoom-in-left]{transform:translate3d(100px,0,0) scale(.6)}[data-aos=zoom-out]{transform:scale(1.2)}[data-aos=zoom-out-up]{transform:translate3d(0,100px,0) scale(1.2)}[data-aos=zoom-out-down]{transform:translate3d(0,-100px,0) scale(1.2)}[data-aos=zoom-out-right]{transform:translate3d(-100px,0,0) scale(1.2)}[data-aos=zoom-out-left]{transform:translate3d(100px,0,0) scale(1.2)}[data-aos^=slide][data-aos^=slide]{transition-property:transform}[data-aos^=slide][data-aos^=slide].aos-animate{transform:translateZ(0)}[data-aos=slide-up]{transform:translate3d(0,100%,0)}[data-aos=slide-down]{transform:translate3d(0,-100%,0)}[data-aos=slide-right]{transform:translate3d(-100%,0,0)}[data-aos=slide-left]{transform:translate3d(100%,0,0)}[data-aos^=flip][data-aos^=flip]{backface-visibility:hidden;transition-property:transform}[data-aos=flip-left]{transform:perspective(2500px) rotateY(-100deg)}[data-aos=flip-left].aos-animate{transform:perspective(2500px) rotateY(0)}[data-aos=flip-right]{transform:perspective(2500px) rotateY(100deg)}[data-aos=flip-right].aos-animate{transform:perspective(2500px) rotateY(0)}[data-aos=flip-up]{transform:perspective(2500px) rotateX(-100deg)}[data-aos=flip-up].aos-animate{transform:perspective(2500px) rotateX(0)}[data-aos=flip-down]{transform:perspective(2500px) rotateX(100deg)}[data-aos=flip-down].aos-animate{transform:perspective(2500px) rotateX(0)}

        /* tiny-slider */
        .tns-outer{padding:0 !important}.tns-outer [hidden]{display:none !important}.tns-outer [aria-controls],.tns-outer [data-action]{cursor:pointer}.tns-slider{-webkit-transition:all 0s;-moz-transition:all 0s;transition:all 0s}.tns-slider>.tns-item{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.tns-horizontal.tns-subpixel{white-space:nowrap}.tns-horizontal.tns-subpixel>.tns-item{display:inline-block;vertical-align:top;white-space:normal}.tns-horizontal.tns-no-subpixel:after{content:'';display:table;clear:both}.tns-horizontal.tns-no-subpixel>.tns-item{float:left}.tns-horizontal.tns-carousel.tns-no-subpixel>.tns-item{margin-right:-100%}.tns-no-calc{position:relative;left:0}.tns-gallery{position:relative;left:0;min-height:1px}.tns-gallery>.tns-item{position:absolute;left:-100%;-webkit-transition:transform 0s, opacity 0s;-moz-transition:transform 0s, opacity 0s;transition:transform 0s, opacity 0s}.tns-gallery>.tns-slide-active{position:relative;left:auto !important}.tns-gallery>.tns-moving{-webkit-transition:all 0.25s;-moz-transition:all 0.25s;transition:all 0.25s}.tns-autowidth{display:inline-block}.tns-lazy-img{-webkit-transition:opacity 0.6s;-moz-transition:opacity 0.6s;transition:opacity 0.6s;opacity:0.6}.tns-lazy-img.tns-complete{opacity:1}.tns-ah{-webkit-transition:height 0s;-moz-transition:height 0s;transition:height 0s}.tns-ovh{overflow:hidden}.tns-visually-hidden{position:absolute;left:-10000em}.tns-transparent{opacity:0;visibility:hidden}.tns-fadeIn{opacity:1;filter:alpha(opacity=100);z-index:0}.tns-normal,.tns-fadeOut{opacity:0;filter:alpha(opacity=0);z-index:-1}.tns-vpfix{white-space:nowrap}.tns-vpfix>div,.tns-vpfix>li{display:inline-block}.tns-t-subp2{margin:0 auto;width:310px;position:relative;height:10px;overflow:hidden}.tns-t-ct{width:2333.3333333%;width:-webkit-calc(100% * 70 / 3);width:-moz-calc(100% * 70 / 3);width:calc(100% * 70 / 3);position:absolute;right:0}.tns-t-ct:after{content:'';display:table;clear:both}.tns-t-ct>div{width:1.4285714%;width:-webkit-calc(100% / 70);width:-moz-calc(100% / 70);width:calc(100% / 70);height:10px;float:left}
    </style>
  </head>