<style>
    /*! tailwindcss v2.1.4 | MIT License | https://tailwindcss.com *//*! modern-normalize v1.1.0 | MIT License | https://github.com/sindresorhus/modern-normalize */
    *, ::after, ::before {
        box-sizing: border-box
    }

    html {
        -moz-tab-size: 4;
        -o-tab-size: 4;
        tab-size: 4
    }

    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    body {
        font-family: system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji'
    }

    hr {
        height: 0;
        color: inherit
    }

    abbr[title] {
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted
    }

    b, strong {
        font-weight: bolder
    }

    code, kbd, pre, samp {
        font-family: ui-monospace, SFMono-Regular, Consolas, 'Liberation Mono', Menlo, monospace;
        font-size: 1em
    }

    small {
        font-size: 80%
    }

    sub, sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline
    }

    sub {
        bottom: -.25em
    }

    sup {
        top: -.5em
    }

    table {
        text-indent: 0;
        border-color: inherit
    }

    button, input, optgroup, select, textarea {
        font-family: inherit;
        font-size: 100%;
        line-height: 1.15;
        margin: 0
    }

    button, select {
        text-transform: none
    }

    [type=button], [type=reset], [type=submit], button {
        -webkit-appearance: button
    }

    legend {
        padding: 0
    }

    progress {
        vertical-align: baseline
    }

    summary {
        display: list-item
    }

    blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre {
        margin: 0
    }

    button {
        background-color: transparent;
        background-image: none
    }

    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color
    }

    fieldset {
        margin: 0;
        padding: 0
    }

    ol, ul {
        list-style: none;
        margin: 0;
        padding: 0
    }

    html {
        font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        line-height: 1.5
    }

    body {
        font-family: inherit;
        line-height: inherit
    }

    *, ::after, ::before {
        box-sizing: border-box;
        border-width: 0;
        border-style: solid;
        border-color: #e5e7eb
    }

    hr {
        border-top-width: 1px
    }

    img {
        border-style: solid
    }

    textarea {
        resize: vertical
    }

    input::-moz-placeholder, textarea::-moz-placeholder {
        opacity: 1;
        color: #9ca3af
    }

    input:-ms-input-placeholder, textarea:-ms-input-placeholder {
        opacity: 1;
        color: #9ca3af
    }

    input::placeholder, textarea::placeholder {
        opacity: 1;
        color: #9ca3af
    }

    button {
        cursor: pointer
    }

    table {
        border-collapse: collapse
    }

    h1, h2, h3, h4, h5, h6 {
        font-size: inherit;
        font-weight: inherit
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    button, input, optgroup, select, textarea {
        padding: 0;
        line-height: inherit;
        color: inherit
    }

    code, kbd, pre, samp {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
    }

    audio, canvas, embed, iframe, img, object, svg, video {
        display: block;
        vertical-align: middle
    }

    img, video {
        max-width: 100%;
        height: auto
    }

    @media (min-width: 1024px) {
        .navbar, .navbar-end, .navbar-menu {
            display: flex;
            align-items: stretch
        }
    }

    .navbar {
        --tw-bg-opacity: 1;
        background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
        --tw-border-opacity: 1;
        border-color: rgba(243, 244, 246, var(--tw-border-opacity));
        border-bottom-width: 1px;
        display: flex;
        height: 3.5rem;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        width: 100vw;
        z-index: 30;
        transition-property: all;
        transition-timing-function: cubic-bezier(.4, 0, .2, 1);
        transition-duration: 150ms
    }

    @media (min-width: 1024px) {
        .navbar {
            padding-left: 15rem;
            width: auto
        }
    }

    .navbar-brand {
        display: flex;
        align-items: stretch;
        flex: 1 1 0%;
        height: 3.5rem
    }

    .navbar-brand.is-right {
        flex: none
    }

    @media (min-width: 1024px) {
        .navbar-brand.is-right {
            display: none
        }
    }

    .navbar-brand .navbar-item {
        display: flex;
        align-items: center
    }

    .navbar-item, .navbar-link {
        display: block;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: .75rem;
        padding-right: .75rem
    }

    .navbar-item {
        flex-grow: 0;
        flex-shrink: 0;
        position: relative
    }

    @media (min-width: 1024px) {
        .navbar-item {
            display: flex;
            align-items: center
        }
    }

    @media (min-width: 1024px) {
        .navbar-item.mobile-aside-button {
            display: none
        }
    }

    @media (min-width: 1024px) {
        .navbar-item.has-divider {
            --tw-border-opacity: 1;
            border-color: rgba(243, 244, 246, var(--tw-border-opacity));
            border-right-width: 1px
        }
    }

    .navbar-item > .navbar-link {
        --tw-bg-opacity: 1;
        background-color: rgba(243, 244, 246, var(--tw-bg-opacity))
    }

    @media (min-width: 1024px) {
        .navbar-item > .navbar-link {
            background-color: transparent
        }
    }

    .navbar-item .icon + span {
        margin-left: .5rem
    }

    .navbar-item.has-user-avatar > .navbar-link {
        display: flex;
        align-items: center
    }

    .navbar-item.has-user-avatar .user-avatar {
        display: inline-flex;
        height: 1.5rem;
        margin-right: .75rem;
        width: 1.5rem
    }

    .navbar-item.dropdown {
        padding: 0
    }

    @media (min-width: 1024px) {
        .navbar-item.dropdown {
            padding-top: .5rem;
            padding-bottom: .5rem;
            padding-left: .75rem;
            padding-right: .75rem
        }
    }

    .navbar-item.dropdown > .navbar-link .icon:last-child {
        display: none
    }

    @media (min-width: 1024px) {
        .navbar-item.dropdown > .navbar-link .icon:last-child {
            display: inline-flex
        }
    }

    @media (min-width: 1024px) {
        .navbar-item.desktop-icon-only {
            justify-content: center;
            width: 4rem
        }
    }

    @media (min-width: 1024px) {
        .navbar-item.desktop-icon-only span:last-child {
            display: none
        }
    }

    .navbar-item .input {
        border-width: 0
    }

    .navbar-menu {
        max-height: calc(100vh - 3.5rem);
        --tw-bg-opacity: 1;
        background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
        --tw-border-opacity: 1;
        border-color: rgba(243, 244, 246, var(--tw-border-opacity));
        border-bottom-width: 1px;
        display: none;
        overflow: auto;
        position: absolute;
        left: 0;
        top: 3.5rem;
        --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        width: 100vw
    }

    @media (min-width: 1024px) {
        .navbar-menu {
            border-bottom-width: 0;
            display: flex;
            flex-grow: 1;
            overflow: visible;
            position: static;
            --tw-shadow: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }
    }

    .navbar-menu.active {
        display: block
    }

    @media (min-width: 1024px) {
        .navbar-end {
            justify-content: flex-end;
            margin-left: auto
        }
    }

    .navbar-item .navbar-dropdown {
        font-size: .875rem;
        line-height: 1.25rem
    }

    @media (min-width: 1024px) {
        .navbar-item .navbar-dropdown {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
            --tw-border-opacity: 1;
            border-color: rgba(229, 231, 235, var(--tw-border-opacity));
            border-bottom-right-radius: .25rem;
            border-bottom-left-radius: .25rem;
            border-top-width: 2px;
            min-width: 100%;
            position: absolute;
            left: 0;
            top: 100%;
            --tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            z-index: 20
        }
    }

    @media (min-width: 1024px) {
        .navbar-item:not(.active) .navbar-dropdown {
            display: none
        }
    }

    .navbar-item.active.dropdown > .navbar-link, .navbar-item.active:not(.dropdown) {
        --tw-text-opacity: 1;
        color: rgba(59, 130, 246, var(--tw-text-opacity))
    }

    .field:not(:last-child) {
        margin-bottom: .75rem
    }

    .field.spaced:not(:last-child) {
        margin-bottom: 1.5rem
    }

    .field-body .field .field {
        margin-bottom: 0
    }

    .field.addons {
        display: flex;
        justify-content: flex-start
    }

    .field.addons .control.expanded {
        flex-grow: 1;
        flex-shrink: 1
    }

    .field.addons .control:first-child:not(:only-child) .input, .field.addons .control:first-child:not(:only-child) .select select {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-right-width: 0
    }

    .field.addons .control:last-child:not(:only-child) .input, .field.addons .control:last-child:not(:only-child) .select select {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-left-width: 0
    }

    .field.grouped {
        display: flex;
        justify-content: flex-start
    }

    .field.grouped > .control:not(:last-child) {
        margin-right: .75rem
    }

    .field.grouped.multiline {
        flex-wrap: wrap
    }

    .label {
        display: block;
        font-weight: 700;
        margin-bottom: .5rem
    }

    .control {
        position: relative
    }

    .control.icons-left, .control.icons-right {
        position: relative
    }

    .input, .select select, .textarea {
        --tw-border-opacity: 1;
        border-color: rgba(156, 163, 175, var(--tw-border-opacity));
        border-radius: .25rem;
        border-width: 1px;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: .75rem;
        padding-right: .75rem
    }

    .input, .select select {
        height: 2.5rem
    }

    .input, .select select, .textarea {
        --tw-bg-opacity: 1;
        background-color: rgba(255, 255, 255, var(--tw-bg-opacity))
    }

    .input:focus, .select select:focus, .textarea:focus {
        --tw-border-opacity: 1;
        border-color: rgba(243, 244, 246, var(--tw-border-opacity))
    }

    .input, .select select, .textarea {
        max-width: 100%
    }

    .input:focus, .select select:focus, .textarea:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
    }

    .input, .select select, .textarea {
        width: 100%
    }

    .input[readonly] {
        --tw-bg-opacity: 1;
        background-color: rgba(243, 244, 246, var(--tw-bg-opacity));
        pointer-events: none
    }

    .textarea {
        height: 6rem
    }

    .control.icons-left .icon, .control.icons-right .icon {
        height: 2.5rem;
        position: absolute;
        top: 0;
        width: 2.5rem;
        z-index: 10
    }

    .control.icons-left .input, .control.icons-left .select select {
        padding-left: 2.5rem
    }

    .control.icons-left .icon.left {
        left: 0
    }

    .control.icons-right .input, .control.icons-right .select select {
        padding-right: 2.5rem
    }

    .control.icons-right .icon.right {
        right: 0
    }

    .help {
        display: block;
        font-size: .75rem;
        line-height: 1rem;
        margin-top: .25rem;
        --tw-text-opacity: 1;
        color: rgba(107, 114, 128, var(--tw-text-opacity))
    }

    .file {
        display: flex;
        align-items: stretch;
        justify-content: flex-start;
        position: relative
    }

    .upload {
        display: inline-flex
    }

    .upload input[type=file] {
        cursor: pointer;
        height: 100%;
        opacity: 0;
        outline: 2px solid transparent;
        outline-offset: 2px;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: -1
    }

    .space-y-3 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(.75rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(.75rem * var(--tw-space-y-reverse))
    }

    .space-x-3 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(.75rem * var(--tw-space-x-reverse));
        margin-left: calc(.75rem * calc(1 - var(--tw-space-x-reverse)))
    }

    .space-y-6 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(1.5rem * var(--tw-space-y-reverse))
    }

    .rounded-full {
        border-radius: 9999px
    }

    .block {
        display: block
    }

    .flex {
        display: flex
    }

    .table {
        display: table
    }

    .grid {
        display: grid
    }

    .hidden {
        display: none
    }

    .flex-col {
        flex-direction: column
    }

    .items-center {
        align-items: center
    }

    .justify-start {
        justify-content: flex-start
    }

    .justify-between {
        justify-content: space-between
    }

    .font-black {
        font-weight: 900
    }

    .h-8 {
        height: 2rem
    }

    .h-48 {
        height: 12rem
    }

    .h-full {
        height: 100%
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .mb-6 {
        margin-bottom: 1.5rem
    }

    * {
        --tw-shadow: 0 0 #0000
    }

    * {
        --tw-ring-inset: var(--tw-empty,); /*!*//*!*/
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgba(59, 130, 246, 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000
    }

    .text-gray-500 {
        --tw-text-opacity: 1;
        color: rgba(107, 114, 128, var(--tw-text-opacity))
    }

    .text-red-500 {
        --tw-text-opacity: 1;
        color: rgba(239, 68, 68, var(--tw-text-opacity))
    }

    .text-green-500 {
        --tw-text-opacity: 1;
        color: rgba(16, 185, 129, var(--tw-text-opacity))
    }

    .text-blue-500 {
        --tw-text-opacity: 1;
        color: rgba(59, 130, 246, var(--tw-text-opacity))
    }

    .w-48 {
        width: 12rem
    }

    .w-auto {
        width: auto
    }

    .gap-6 {
        gap: 1.5rem
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @-webkit-keyframes spin {
        to {
            transform: rotate(360deg)
        }
    }

    @keyframes spin {
        to {
            transform: rotate(360deg)
        }
    }

    @-webkit-keyframes ping {
        100%, 75% {
            transform: scale(2);
            opacity: 0
        }
    }

    @keyframes ping {
        100%, 75% {
            transform: scale(2);
            opacity: 0
        }
    }

    @-webkit-keyframes pulse {
        50% {
            opacity: .5
        }
    }

    @keyframes pulse {
        50% {
            opacity: .5
        }
    }

    @-webkit-keyframes bounce {
        0%, 100% {
            transform: translateY(-25%);
            -webkit-animation-timing-function: cubic-bezier(.8, 0, 1, 1);
            animation-timing-function: cubic-bezier(.8, 0, 1, 1)
        }
        50% {
            transform: none;
            -webkit-animation-timing-function: cubic-bezier(0, 0, .2, 1);
            animation-timing-function: cubic-bezier(0, 0, .2, 1)
        }
    }

    @keyframes bounce {
        0%, 100% {
            transform: translateY(-25%);
            -webkit-animation-timing-function: cubic-bezier(.8, 0, 1, 1);
            animation-timing-function: cubic-bezier(.8, 0, 1, 1)
        }
        50% {
            transform: none;
            -webkit-animation-timing-function: cubic-bezier(0, 0, .2, 1);
            animation-timing-function: cubic-bezier(0, 0, .2, 1)
        }
    }

    body {
        --tw-bg-opacity: 1;
        background-color: rgba(249, 250, 251, var(--tw-bg-opacity));
        font-size: 1rem;
        line-height: 1.5rem;
        padding-top: 3.5rem
    }

    @media (min-width: 1024px) {
        body {
            padding-left: 15rem
        }
    }

    #app {
        width: 100vw;
        transition-property: all;
        transition-timing-function: cubic-bezier(.4, 0, .2, 1);
        transition-duration: 150ms
    }

    @media (min-width: 1024px) {
        #app {
            width: auto
        }
    }

    .main-section {
        padding: 1.5rem
    }

    .dropdown {
        cursor: pointer
    }

    .clipped, .clipped body {
        overflow: hidden
    }

    .m-clipped, .m-clipped body {
        overflow: hidden
    }

    @media (min-width: 1024px) {
        .m-clipped, .m-clipped body {
            overflow: visible
        }
    }

    .form-screen body {
        padding: 0
    }

    .form-screen .main-section {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh
    }

    .aside {
        --tw-bg-opacity: 1;
        background-color: rgba(31, 41, 55, var(--tw-bg-opacity));
        height: 100vh;
        position: fixed;
        top: 0;
        left: -15rem;
        width: 15rem;
        z-index: 40;
        transition-property: all;
        transition-timing-function: cubic-bezier(.4, 0, .2, 1);
        transition-duration: 150ms
    }

    @media (min-width: 1024px) {
        .aside {
            left: 0
        }
    }

    .aside-tools {
        --tw-bg-opacity: 1;
        background-color: rgba(17, 24, 39, var(--tw-bg-opacity));
        display: flex;
        flex-direction: row;
        align-items: center;
        flex: 1 1 0%;
        height: 3.5rem;
        padding-left: .75rem;
        padding-right: .75rem;
        --tw-text-opacity: 1;
        color: rgba(255, 255, 255, var(--tw-text-opacity));
        width: 100%
    }

    .aside-mobile-expanded .aside {
        left: 0
    }

    .aside-mobile-expanded .navbar {
        margin-left: 15rem
    }

    .aside-mobile-expanded #app {
        margin-left: 15rem
    }

    .aside-mobile-expanded, .aside-mobile-expanded body {
        overflow: hidden
    }

    @media (min-width: 1024px) {
        .aside-mobile-expanded, .aside-mobile-expanded body {
            overflow: visible
        }
    }

    .menu-label {
        font-size: .75rem;
        line-height: 1rem;
        padding: .75rem;
        --tw-text-opacity: 1;
        color: rgba(156, 163, 175, var(--tw-text-opacity));
        text-transform: uppercase
    }

    .menu-list li a {
        display: flex;
        padding-top: .5rem;
        padding-bottom: .5rem;
        --tw-text-opacity: 1;
        color: rgba(209, 213, 219, var(--tw-text-opacity))
    }

    .menu-list li > a:hover {
        --tw-bg-opacity: 1;
        background-color: rgba(55, 65, 81, var(--tw-bg-opacity))
    }

    .menu-list li a .menu-item-label {
        flex-grow: 1
    }

    .menu-list li a .icon {
        flex: none;
        width: 3rem
    }

    .menu-list li.active > a {
        --tw-bg-opacity: 1;
        background-color: rgba(55, 65, 81, var(--tw-bg-opacity))
    }

    .menu-list li ul {
        display: none
    }

    .menu-list li ul a {
        font-size: .875rem;
        line-height: 1.25rem;
        padding: .75rem
    }

    .menu-list li.active ul {
        --tw-bg-opacity: 1;
        background-color: rgba(75, 85, 99, var(--tw-bg-opacity));
        display: block
    }

    .is-title-bar {
        --tw-border-opacity: 1;
        border-color: rgba(243, 244, 246, var(--tw-border-opacity));
        border-bottom-width: 1px;
        padding: 1.5rem
    }

    .is-title-bar li {
        display: inline-block;
        font-size: 1.5rem;
        line-height: 2rem;
        padding-right: .75rem;
        --tw-text-opacity: 1;
        color: rgba(107, 114, 128, var(--tw-text-opacity))
    }

    .is-title-bar li:not(:last-child):after {
        content: '/';
        display: inline-block;
        padding-left: .75rem
    }

    .is-title-bar li:last-child {
        font-weight: 900;
        padding-right: 0;
        --tw-text-opacity: 1;
        color: rgba(0, 0, 0, var(--tw-text-opacity))
    }

    .button {
        --tw-bg-opacity: 1;
        background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
        --tw-border-opacity: 1;
        border-color: rgba(249, 250, 251, var(--tw-border-opacity))
    }

    .button:hover {
        --tw-border-opacity: 1;
        border-color: rgba(107, 114, 128, var(--tw-border-opacity))
    }

    .button {
        border-radius: .25rem;
        border-width: 1px;
        cursor: pointer;
        display: inline-flex;
        justify-content: center
    }

    .button:focus {
        outline: 2px solid transparent;
        outline-offset: 2px
    }

    .button {
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        padding-right: 1rem;
        text-align: center;
        --tw-text-opacity: 1;
        color: rgba(0, 0, 0, var(--tw-text-opacity));
        white-space: nowrap
    }

    .button.addon-right {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .button.addon-left {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .button.small {
        font-size: .75rem;
        line-height: 1rem;
        padding: .25rem
    }

    .button.small.textual {
        padding-left: .75rem;
        padding-right: .75rem
    }

    .button.active {
        --tw-border-opacity: 1;
        border-color: rgba(209, 213, 219, var(--tw-border-opacity))
    }

    .button.active:hover {
        --tw-border-opacity: 1;
        border-color: rgba(107, 114, 128, var(--tw-border-opacity))
    }

    .button.green {
        --tw-bg-opacity: 1;
        background-color: rgba(16, 185, 129, var(--tw-bg-opacity))
    }

    .button.green:hover {
        --tw-bg-opacity: 1;
        background-color: rgba(5, 150, 105, var(--tw-bg-opacity))
    }

    .button.green {
        --tw-border-opacity: 1;
        border-color: rgba(16, 185, 129, var(--tw-border-opacity));
        --tw-text-opacity: 1;
        color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .button.red {
        --tw-bg-opacity: 1;
        background-color: rgba(239, 68, 68, var(--tw-bg-opacity))
    }

    .button.red:hover {
        --tw-bg-opacity: 1;
        background-color: rgba(220, 38, 38, var(--tw-bg-opacity))
    }

    .button.red {
        --tw-border-opacity: 1;
        border-color: rgba(239, 68, 68, var(--tw-border-opacity));
        --tw-text-opacity: 1;
        color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .button.blue {
        --tw-bg-opacity: 1;
        background-color: rgba(59, 130, 246, var(--tw-bg-opacity))
    }

    .button.blue:hover {
        --tw-bg-opacity: 1;
        background-color: rgba(37, 99, 235, var(--tw-bg-opacity))
    }

    .button.blue {
        --tw-border-opacity: 1;
        border-color: rgba(59, 130, 246, var(--tw-border-opacity));
        --tw-text-opacity: 1;
        color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .button.light {
        --tw-bg-opacity: 1;
        background-color: rgba(243, 244, 246, var(--tw-bg-opacity))
    }

    .button.light:hover {
        --tw-bg-opacity: 1;
        background-color: rgba(229, 231, 235, var(--tw-bg-opacity))
    }

    .button.light {
        --tw-border-opacity: 1;
        border-color: rgba(243, 244, 246, var(--tw-border-opacity))
    }

    .buttons {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: flex-start
    }

    .buttons.nowrap {
        flex-wrap: nowrap
    }

    .buttons.right {
        justify-content: flex-end
    }

    .buttons .button {
        margin-left: .25rem;
        margin-right: .25rem
    }

    .is-hero-bar {
        --tw-bg-opacity: 1;
        background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
        --tw-border-opacity: 1;
        border-color: rgba(243, 244, 246, var(--tw-border-opacity));
        border-bottom-width: 1px;
        padding: 1.5rem
    }

    .is-hero-bar h1 {
        font-weight: 600;
        font-size: 1.875rem;
        line-height: 2.25rem;
        line-height: 1.25
    }

    .card {
        --tw-bg-opacity: 1;
        background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
        --tw-border-opacity: 1;
        border-color: rgba(243, 244, 246, var(--tw-border-opacity));
        border-radius: .25rem;
        border-width: 1px
    }

    .card.has-table .card-content {
        padding: 0
    }

    .card-content {
        padding: 1.5rem
    }

    .card-content hr {
        margin-top: 1.5rem;
        margin-bottom: 1.5rem;
        margin-left: -1.5rem;
        margin-right: -1.5rem
    }

    .card.empty .card-content {
        padding-top: 3rem;
        padding-bottom: 3rem;
        text-align: center;
        --tw-text-opacity: 1;
        color: rgba(107, 114, 128, var(--tw-text-opacity))
    }

    .card-header {
        --tw-border-opacity: 1;
        border-color: rgba(243, 244, 246, var(--tw-border-opacity));
        border-bottom-width: 1px;
        display: flex;
        align-items: stretch
    }

    .card-header-icon, .card-header-title {
        display: flex;
        align-items: center;
        padding-top: .75rem;
        padding-bottom: .75rem;
        padding-left: 1rem;
        padding-right: 1rem
    }

    .card-header-title {
        flex-grow: 1;
        font-weight: 700
    }

    .card-header-icon {
        justify-content: center
    }

    .widget-label h3 {
        font-size: 1.125rem;
        line-height: 1.75rem;
        line-height: 1.25;
        --tw-text-opacity: 1;
        color: rgba(107, 114, 128, var(--tw-text-opacity))
    }

    .widget-label h1 {
        font-weight: 600;
        font-size: 1.875rem;
        line-height: 2.25rem;
        line-height: 1.25
    }

    .form-screen .card {
        border-radius: .5rem;
        --tw-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        width: 91.666667%
    }

    @media (min-width: 1024px) {
        .form-screen .card {
            width: 41.666667%
        }
    }

    .icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        height: 1.5rem;
        width: 1.5rem
    }

    .icon.widget-icon {
        height: 5rem;
        width: 5rem
    }

    .icon.large {
        height: 3rem;
        width: 3rem
    }

    .icon i {
        display: inline-flex
    }

    table {
        width: 100%
    }

    thead {
        display: none
    }

    @media (min-width: 1024px) {
        thead {
            display: table-header-group
        }
    }

    tr {
        --tw-border-opacity: 1;
        border-color: rgba(243, 244, 246, var(--tw-border-opacity));
        border-bottom-width: 4px;
        display: block;
        max-width: 100%;
        position: relative
    }

    @media (min-width: 1024px) {
        tr {
            border-bottom-width: 0;
            display: table-row
        }
    }

    tr:last-child {
        border-bottom-width: 0
    }

    @media (min-width: 1024px) {
        th {
            padding-top: .5rem;
            padding-bottom: .5rem;
            padding-left: .75rem;
            padding-right: .75rem;
            text-align: left
        }
    }

    td {
        --tw-border-opacity: 1;
        border-color: rgba(243, 244, 246, var(--tw-border-opacity));
        border-bottom-width: 1px;
        display: flex;
        justify-content: space-between;
        padding-top: .75rem;
        padding-bottom: .75rem;
        padding-left: 1rem;
        padding-right: 1rem;
        text-align: right;
        vertical-align: top
    }

    @media (min-width: 1024px) {
        td {
            border-bottom-width: 0;
            display: table-cell;
            padding-top: .5rem;
            padding-bottom: .5rem;
            padding-left: .75rem;
            padding-right: .75rem;
            text-align: left;
            vertical-align: middle
        }
    }

    @media (min-width: 1024px) {
        tr:nth-child(odd) td {
            --tw-bg-opacity: 1;
            background-color: rgba(249, 250, 251, var(--tw-bg-opacity))
        }
    }

    td:last-child {
        border-bottom-width: 0
    }

    @media (min-width: 1024px) {
        tbody tr:hover td {
            --tw-bg-opacity: 1;
            background-color: rgba(243, 244, 246, var(--tw-bg-opacity))
        }
    }

    td:before {
        content: attr(data-label);
        font-weight: 600;
        padding-right: .75rem;
        text-align: left
    }

    @media (min-width: 1024px) {
        td:before {
            display: none
        }
    }

    @media (min-width: 1024px) {
        td.checkbox-cell, th.checkbox-cell {
            width: 1.25rem
        }
    }

    td.progress-cell progress {
        display: flex;
        align-self: center;
        width: 40%
    }

    @media (min-width: 1024px) {
        td.progress-cell progress {
            width: 100%
        }
    }

    td.image-cell {
        border-bottom-width: 0
    }

    @media (min-width: 1024px) {
        td.image-cell {
            width: 1.5rem
        }
    }

    td.actions-cell:before, td.image-cell:before {
        display: none
    }

    td.image-cell .image {
        height: 6rem;
        margin-left: auto;
        margin-right: auto;
        width: 6rem
    }

    @media (min-width: 1024px) {
        td.image-cell .image {
            height: 1.5rem;
            width: 1.5rem
        }
    }

    .table-pagination {
        --tw-border-opacity: 1;
        border-color: rgba(243, 244, 246, var(--tw-border-opacity));
        border-top-width: 1px;
        padding-top: .75rem;
        padding-bottom: .75rem;
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    progress {
        border-radius: 9999px;
        height: .75rem;
        overflow: hidden
    }

    progress::-webkit-progress-bar {
        --tw-bg-opacity: 1;
        background-color: rgba(229, 231, 235, var(--tw-bg-opacity))
    }

    progress::-webkit-progress-value {
        --tw-bg-opacity: 1;
        background-color: rgba(16, 185, 129, var(--tw-bg-opacity))
    }

    progress::-moz-progress-bar {
        --tw-bg-opacity: 1;
        background-color: rgba(16, 185, 129, var(--tw-bg-opacity))
    }

    progress::-ms-fill {
        --tw-bg-opacity: 1;
        background-color: rgba(16, 185, 129, var(--tw-bg-opacity));
        border-width: 0
    }

    .image {
        display: block;
        position: relative
    }

    .image img {
        display: block;
        height: auto;
        max-width: 100%;
        width: 100%
    }

    .modal {
        display: none;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 40
    }

    .modal.active {
        display: flex
    }

    .modal-background {
        --tw-bg-opacity: 1;
        background-color: rgba(17, 24, 39, var(--tw-bg-opacity));
        --tw-bg-opacity: 0.8;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0
    }

    .modal-card {
        max-height: calc(100vh - 160px);
        display: flex;
        flex-direction: column;
        overflow: hidden;
        position: relative;
        width: 100%
    }

    @media (min-width: 1024px) {
        .modal-card {
            margin-left: auto;
            margin-right: auto;
            width: 40%
        }
    }

    .modal-card-body > :not([hidden]) ~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(.5rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(.5rem * var(--tw-space-y-reverse))
    }

    .modal-card-body {
        --tw-bg-opacity: 1;
        background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
        flex-grow: 1;
        flex-shrink: 1;
        overflow: auto;
        padding: 1.5rem
    }

    .modal-card-foot, .modal-card-head {
        --tw-bg-opacity: 1;
        background-color: rgba(243, 244, 246, var(--tw-bg-opacity));
        --tw-border-opacity: 1;
        border-color: rgba(229, 231, 235, var(--tw-border-opacity));
        display: flex;
        align-items: center;
        justify-content: flex-start;
        flex-shrink: 0;
        padding-top: 1rem;
        padding-bottom: 1rem;
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        position: relative
    }

    .modal-card-head {
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        border-bottom-width: 1px
    }

    .modal-card-foot {
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: .25rem;
        border-top-width: 1px
    }

    .modal-card-foot .button:not(:last-child) {
        margin-right: .5rem
    }

    .notification {
        border-radius: .25rem;
        padding-left: .75rem;
        padding-right: .75rem;
        padding-top: 1.5rem;
        padding-bottom: 1.5rem
    }

    .notification:not(:last-child) {
        margin-bottom: 1.5rem
    }

    .notification.blue {
        --tw-bg-opacity: 1;
        background-color: rgba(59, 130, 246, var(--tw-bg-opacity));
        --tw-text-opacity: 1;
        color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .notification.green {
        --tw-bg-opacity: 1;
        background-color: rgba(16, 185, 129, var(--tw-bg-opacity));
        --tw-text-opacity: 1;
        color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .notification.red {
        --tw-bg-opacity: 1;
        background-color: rgba(239, 68, 68, var(--tw-bg-opacity));
        --tw-text-opacity: 1;
        color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .checkbox, .radio, .switch {
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        position: relative
    }

    .checkbox input[type=checkbox], .radio input[type=radio], .switch input[type=checkbox] {
        opacity: 0;
        position: absolute;
        left: 0;
        z-index: -1
    }

    .checkbox input[type=checkbox] + .check, .radio input[type=radio] + .check, .switch input[type=checkbox] + .check {
        --tw-border-opacity: 1;
        border-color: rgba(209, 213, 219, var(--tw-border-opacity))
    }

    .checkbox input[type=checkbox] + .check:hover, .radio input[type=radio] + .check:hover, .switch input[type=checkbox] + .check:hover {
        --tw-border-opacity: 1;
        border-color: rgba(156, 163, 175, var(--tw-border-opacity))
    }

    .checkbox input[type=checkbox] + .check, .radio input[type=radio] + .check, .switch input[type=checkbox] + .check {
        border-width: 1px
    }

    .checkbox input[type=checkbox] + .check, .radio input[type=radio] + .check {
        display: block;
        height: 1.25rem;
        width: 1.25rem
    }

    .checkbox input[type=checkbox] + .check {
        border-radius: .25rem
    }

    .switch input[type=checkbox] + .check {
        --tw-bg-opacity: 1;
        background-color: rgba(229, 231, 235, var(--tw-bg-opacity));
        display: flex;
        align-items: center;
        flex-shrink: 0;
        height: 1.5rem;
        padding: .125rem;
        width: 3rem
    }

    .radio input[type=radio] + .check, .switch input[type=checkbox] + .check, .switch input[type=checkbox] + .check:before {
        border-radius: 9999px
    }

    .checkbox input[type=checkbox]:checked + .check, .radio input[type=radio]:checked + .check {
        --tw-bg-opacity: 1;
        background-color: rgba(59, 130, 246, var(--tw-bg-opacity));
        background-position: center;
        background-repeat: no-repeat;
        --tw-border-opacity: 1;
        border-color: rgba(59, 130, 246, var(--tw-border-opacity));
        border-width: 4px
    }

    .checkbox input[type=checkbox]:checked + .check {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'%3E%3Cpath style='fill:%23fff' d='M 0.04038059,0.6267767 0.14644661,0.52071068 0.42928932,0.80355339 0.3232233,0.90961941 z M 0.21715729,0.80355339 0.85355339,0.16715729 0.95961941,0.2732233 0.3232233,0.90961941 z'%3E%3C/path%3E%3C/svg%3E")
    }

    .radio input[type=radio]:checked + .check {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='%23fff' d='M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z' /%3E%3C/svg%3E")
    }

    .switch input[type=checkbox]:checked + .check {
        --tw-bg-opacity: 1;
        background-color: rgba(59, 130, 246, var(--tw-bg-opacity));
        --tw-border-opacity: 1;
        border-color: rgba(59, 130, 246, var(--tw-border-opacity))
    }

    .switch input[type=checkbox] + .check:before {
        content: '';
        --tw-bg-opacity: 1;
        background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
        --tw-border-opacity: 1;
        border-color: rgba(209, 213, 219, var(--tw-border-opacity));
        border-width: 1px;
        display: block;
        height: 1.25rem;
        width: 1.25rem
    }

    .switch input[type=checkbox]:checked + .check:before {
        transform: translate3d(110%, 0, 0);
        --tw-border-opacity: 1;
        border-color: rgba(59, 130, 246, var(--tw-border-opacity))
    }

    .checkbox .control-label, .radio .control-label, .switch .control-label {
        padding-left: .5rem
    }

    footer {
        --tw-bg-opacity: 1;
        background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    @media (min-width: 768px) {
        .md\:space-y-0 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(0px * var(--tw-space-y-reverse))
        }

        .md\:flex-row {
            flex-direction: row
        }

        .md\:grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr))
        }
    }

    @media (min-width: 1024px) {
        .lg\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }
    }
</style>
