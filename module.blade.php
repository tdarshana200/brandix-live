<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
            *,
            ::after,
            ::before {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
                border-color: #e5e7eb;
            }
            ::after,
            ::before {
                --tw-content: "";
            }
            :host,
            html {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                -moz-tab-size: 4;
                tab-size: 4;
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
                font-feature-settings: normal;
                font-variation-settings: normal;
                -webkit-tap-highlight-color: transparent;
            }
            body {
                margin: 0;
                line-height: inherit;
            }
            hr {
                height: 0;
                color: inherit;
                border-top-width: 1px;
            }
            abbr:where([title]) {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted;
            }
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-size: inherit;
                font-weight: inherit;
            }
            a {
                color: inherit;
                text-decoration: inherit;
            }
            b,
            strong {
                font-weight: bolder;
            }
            code,
            kbd,
            pre,
            samp {
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                font-feature-settings: normal;
                font-variation-settings: normal;
                font-size: 1em;
            }
            small {
                font-size: 80%;
            }
            sub,
            sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline;
            }
            sub {
                bottom: -0.25em;
            }
            sup {
                top: -0.5em;
            }
            table {
                text-indent: 0;
                border-color: inherit;
                border-collapse: collapse;
            }
            button,
            input,
            optgroup,
            select,
            textarea {
                font-family: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                font-size: 100%;
                font-weight: inherit;
                line-height: inherit;
                color: inherit;
                margin: 0;
                padding: 0;
            }
            button,
            select {
                text-transform: none;
            }
            [type="button"],
            [type="reset"],
            [type="submit"],
            button {
                -webkit-appearance: button;
                background-color: transparent;
                background-image: none;
            }
            :-moz-focusring {
                outline: auto;
            }
            :-moz-ui-invalid {
                box-shadow: none;
            }
            progress {
                vertical-align: baseline;
            }
            ::-webkit-inner-spin-button,
            ::-webkit-outer-spin-button {
                height: auto;
            }
            [type="search"] {
                -webkit-appearance: textfield;
                outline-offset: -2px;
            }
            ::-webkit-search-decoration {
                -webkit-appearance: none;
            }
            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit;
            }
            summary {
                display: list-item;
            }
            blockquote,
            dd,
            dl,
            figure,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            hr,
            p,
            pre {
                margin: 0;
            }
            fieldset {
                margin: 0;
                padding: 0;
            }
            legend {
                padding: 0;
            }
            menu,
            ol,
            ul {
                list-style: none;
                margin: 0;
                padding: 0;
            }
            dialog {
                padding: 0;
            }
            textarea {
                resize: vertical;
            }
            input::placeholder,
            textarea::placeholder {
                opacity: 1;
                color: #9ca3af;
            }
            [role="button"],
            button {
                cursor: pointer;
            }
            :disabled {
                cursor: default;
            }
            audio,
            canvas,
            embed,
            iframe,
            img,
            object,
            svg,
            video {
                display: block;
                vertical-align: middle;
            }
            img,
            video {
                max-width: 100%;
                height: auto;
            }
            [hidden] {
                display: none;
            }
            *,
            ::before,
            ::after {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / 0.5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
            }
            ::backdrop {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / 0.5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
            }
            .absolute {
                position: absolute;
            }
            .relative {
                position: relative;
            }
            .-left-20 {
                left: -5rem;
            }
            .top-0 {
                top: 0px;
            }
            .-bottom-16 {
                bottom: -4rem;
            }
            .-left-16 {
                left: -4rem;
            }
            .-mx-3 {
                margin-left: -0.75rem;
                margin-right: -0.75rem;
            }
            .mt-4 {
                margin-top: 1rem;
            }
            .mt-6 {
                margin-top: 1.5rem;
            }
            .flex {
                display: flex;
            }
            .grid {
                display: grid;
            }
            .hidden {
                display: none;
            }
            .aspect-video {
                aspect-ratio: 16 / 9;
            }
            .size-12 {
                width: 3rem;
                height: 3rem;
            }
            .size-5 {
                width: 1.25rem;
                height: 1.25rem;
            }
            .size-6 {
                width: 1.5rem;
                height: 1.5rem;
            }
            .h-12 {
                height: 3rem;
            }
            .h-40 {
                height: 10rem;
            }
            .h-full {
                height: 100%;
            }
            .min-h-screen {
                min-height: 100vh;
            }
            .w-full {
                width: 100%;
            }
            .w-\[calc\(100\%\+8rem\)\] {
                width: calc(100% + 8rem);
            }
            .w-auto {
                width: auto;
            }
            .max-w-\[877px\] {
                max-width: 877px;
            }
            .max-w-2xl {
                max-width: 42rem;
            }
            .flex-1 {
                flex: 1 1 0%;
            }
            .shrink-0 {
                flex-shrink: 0;
            }
            .grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
            .flex-col {
                flex-direction: column;
            }
            .items-start {
                align-items: flex-start;
            }
            .items-center {
                align-items: center;
            }
            .items-stretch {
                align-items: stretch;
            }
            .justify-end {
                justify-content: flex-end;
            }
            .justify-center {
                justify-content: center;
            }
            .gap-2 {
                gap: 0.5rem;
            }
            .gap-4 {
                gap: 1rem;
            }
            .gap-6 {
                gap: 1.5rem;
            }
            .self-center {
                align-self: center;
            }
            .overflow-hidden {
                overflow: hidden;
            }
            .rounded-\[10px\] {
                border-radius: 10px;
            }
            .rounded-full {
                border-radius: 9999px;
            }
            .rounded-lg {
                border-radius: 0.5rem;
            }
            .rounded-md {
                border-radius: 0.375rem;
            }
            .rounded-sm {
                border-radius: 0.125rem;
            }
            .bg-\[\#FF2D20\]\/10 {
                background-color: rgb(255 45 32 / 0.1);
            }
            .bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            }
            .bg-gradient-to-b {
                background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
            }
            .from-transparent {
                --tw-gradient-from: transparent var(--tw-gradient-from-position);
                --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
            }
            .via-white {
                --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to);
            }
            .to-white {
                --tw-gradient-to: #fff var(--tw-gradient-to-position);
            }
            .stroke-\[\#FF2D20\] {
                stroke: #ff2d20;
            }
            .object-cover {
                object-fit: cover;
            }
            .object-top {
                object-position: top;
            }
            .p-6 {
                padding: 1.5rem;
            }
            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
            .py-10 {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem;
            }
            .px-3 {
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }
            .py-16 {
                padding-top: 4rem;
                padding-bottom: 4rem;
            }
            .py-2 {
                padding-top: 0.5rem;
                padding-bottom: 0.5rem;
            }
            .pt-3 {
                padding-top: 0.75rem;
            }
            .text-center {
                text-align: center;
            }
            .font-sans {
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            }
            .text-sm {
                font-size: 0.875rem;
                line-height: 1.25rem;
            }
            .text-sm\/relaxed {
                font-size: 0.875rem;
                line-height: 1.625;
            }
            .text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem;
            }
            .font-semibold {
                font-weight: 600;
            }
            .text-black {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity));
            }
            .text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity));
            }
            .underline {
                -webkit-text-decoration-line: underline;
                text-decoration-line: underline;
            }
            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
                --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
                --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            .ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            }
            .ring-transparent {
                --tw-ring-color: transparent;
            }
            .ring-white\/\[0\.05\] {
                --tw-ring-color: rgb(255 255 255 / 0.05);
            }
            .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
            }
            .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
            }
            .transition {
                transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                transition-duration: 150ms;
            }
            .duration-300 {
                transition-duration: 300ms;
            }
            .selection\:bg-\[\#FF2D20\] *::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity));
            }
            .selection\:text-white *::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity));
            }
            .selection\:bg-\[\#FF2D20\]::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity));
            }
            .selection\:text-white::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity));
            }
            .hover\:text-black:hover {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity));
            }
            .hover\:text-black\/70:hover {
                color: rgb(0 0 0 / 0.7);
            }
            .hover\:ring-black\/20:hover {
                --tw-ring-color: rgb(0 0 0 / 0.2);
            }
            .focus\:outline-none:focus {
                outline: 2px solid transparent;
                outline-offset: 2px;
            }
            .focus-visible\:ring-1:focus-visible {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            }
            .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity));
            }
            @media (min-width: 640px) {
                .sm\:size-16 {
                    width: 4rem;
                    height: 4rem;
                }
                .sm\:size-6 {
                    width: 1.5rem;
                    height: 1.5rem;
                }
                .sm\:pt-5 {
                    padding-top: 1.25rem;
                }
            }
            @media (min-width: 768px) {
                .md\:row-span-3 {
                    grid-row: span 3 / span 3;
                }
            }
            @media (min-width: 1024px) {
                .lg\:col-start-2 {
                    grid-column-start: 2;
                }
                .lg\:h-16 {
                    height: 4rem;
                }
                .lg\:max-w-7xl {
                    max-width: 80rem;
                }
                .lg\:grid-cols-3 {
                    grid-template-columns: repeat(3, minmax(0, 1fr));
                }
                .lg\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                }
                .lg\:flex-col {
                    flex-direction: column;
                }
                .lg\:items-end {
                    align-items: flex-end;
                }
                .lg\:justify-center {
                    justify-content: center;
                }
                .lg\:gap-8 {
                    gap: 2rem;
                }
                .lg\:p-10 {
                    padding: 2.5rem;
                }
                .lg\:pb-10 {
                    padding-bottom: 2.5rem;
                }
                .lg\:pt-0 {
                    padding-top: 0px;
                }
                .lg\:text-\[\#FF2D20\] {
                    --tw-text-opacity: 1;
                    color: rgb(255 45 32 / var(--tw-text-opacity));
                }
            }
            @media (prefers-color-scheme: dark) {
                .dark\:block {
                    display: block;
                }
                .dark\:hidden {
                    display: none;
                }
                .dark\:bg-black {
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 0 0 / var(--tw-bg-opacity));
                }
                .dark\:bg-zinc-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(24 24 27 / var(--tw-bg-opacity));
                }
                .dark\:via-zinc-900 {
                    --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to);
                }
                .dark\:to-zinc-900 {
                    --tw-gradient-to: #18181b var(--tw-gradient-to-position);
                }
                .dark\:text-white\/50 {
                    color: rgb(255 255 255 / 0.5);
                }
                .dark\:text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity));
                }
                .dark\:text-white\/70 {
                    color: rgb(255 255 255 / 0.7);
                }
                .dark\:ring-zinc-800 {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity));
                }
                .dark\:hover\:text-white:hover {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity));
                }
                .dark\:hover\:text-white\/70:hover {
                    color: rgb(255 255 255 / 0.7);
                }
                .dark\:hover\:text-white\/80:hover {
                    color: rgb(255 255 255 / 0.8);
                }
                .dark\:hover\:ring-zinc-700:hover {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity));
                }
                .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity));
                }
                .dark\:focus-visible\:ring-white:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity));
                }
            }
        </style>
        <style>
            label {
    display: inline-block;
    margin-bottom: 0.5rem;
    color: antiquewhite;
}
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50" style="background-color: #830202;">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="#" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="300" height="100" viewBox="0 0 860.000000 464.000000" preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,464.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                    <path
                                        d="M1775 4234 c-125 -21 -245 -73 -337 -148 -69 -56 -148 -172 -177 -259 -42 -125 -44 -299 -6 -437 32 -115 37 -156 33 -236 -5 -103 -46 -193 -114 -253 -57 -50 -113 -68 -239 -75 -309 -18 -526 -174 -607 -436 -29 -96 -31 -261 -4 -360 49 -178 162 -323 308 -394 95 -46 169 -59 308 -54 118 5 134 8 285 59 143 47 169 53 246 53 73 0 93 -4 141 -27 70 -34 148 -118 172 -183 108 -299 208 -418 405 -486 102 -35 256 -33 375 6 156 51 285 154 341 271 67 143 89 342 51 470 -61 203 -212 350 -416 401 -48 12 -92 15 -170 11 -89 -4 -120 -10 -210 -43 -99 -37 -111 -39 -220 -39 -104 0 -120 3 -172 27 -121 57 -210 185 -231 334 -21 149 21 283 118 381 66 65 152 108 290 145 168 44 261 94 360 191 97 97 144 183 171 316 28 143 10 267 -62 418 -75 158 -216 278 -384 327 -57 17 -202 28 -255 20z"
                                    />
                                    <path
                                        d="M3240 1832 c0 -264 -3 -540 -7 -615 l-6 -137 71 0 72 0 0 29 c0 60 9 64 53 25 87 -74 253 -94 360 -44 59 28 132 106 164 176 41 90 59 220 45 331 -22 172 -85 281 -197 338 -121 62 -291 41 -392 -49 l-23 -19 0 221 0 222 -70 0 -70 0 0 -478z m442 -2 c117 -33 186 -196 160 -381 -25 -176 -91 -253 -217 -252 -92 1 -167 47 -208 128 -47 94 -49 280 -5 376 49 108 158 160 270 129z"
                                    />
                                    <path
                                        d="M6730 2091 l0 -220 -51 35 c-148 99 -346 82 -456 -39 -154 -171 -148 -535 12 -706 119 -127 334 -134 466 -13 l27 23 6 -45 7 -46 71 0 71 0 -6 107 c-4 58 -7 335 -7 615 l0 508 -70 0 -70 0 0 -219z m-134 -279 c50 -26 68 -46 98 -112 67 -150 27 -388 -79 -462 -52 -36 -132 -52 -191 -37 -116 29 -188 223 -155 414 20 113 68 181 147 211 49 18 129 12 180 -14z"
                                    />
                                    <path d="M7000 2225 l0 -85 80 0 80 0 0 85 0 85 -80 0 -80 0 0 -85z" />
                                    <path d="M4325 1954 c-16 -8 -45 -27 -62 -40 l-33 -25 0 30 0 31 -72 0 -73 0 5 -432 5 -433 73 -3 72 -3 0 288 c0 298 4 337 43 394 37 55 81 74 165 73 l72 -1 0 68 0 69 -82 0 c-56 0 -93 -5 -113 -16z" />
                                    <path
                                        d="M4738 1956 c-100 -27 -165 -93 -191 -196 l-14 -55 65 -3 c80 -4 92 1 92 33 0 62 97 112 196 102 99 -10 141 -54 146 -153 l3 -49 -130 -6 c-71 -4 -150 -12 -175 -19 -147 -39 -240 -162 -227 -301 13 -146 132 -249 288 -249 61 0 161 31 204 64 18 14 36 26 39 26 3 0 6 -16 6 -35 l0 -35 73 0 72 0 -3 193 c-6 465 -8 500 -26 545 -24 56 -96 118 -159 137 -61 18 -194 19 -259 1z m295 -520 c-5 -132 -62 -214 -165 -235 -61 -13 -122 -4 -164 24 -53 35 -68 129 -29 188 34 53 162 87 310 83 l50 -1 -2 -59z"
                                    />
                                    <path
                                        d="M5595 1955 c-21 -8 -59 -28 -82 -45 -24 -16 -46 -30 -48 -30 -3 0 -5 16 -5 35 l0 35 -76 0 c-65 0 -75 -2 -70 -16 3 -9 6 -204 6 -435 l0 -419 75 0 75 0 0 283 c0 158 5 298 10 318 22 80 86 142 160 154 91 15 170 -21 208 -95 21 -43 22 -53 22 -352 l0 -308 70 0 70 0 0 314 c0 290 -2 319 -21 381 -27 88 -91 156 -170 179 -65 20 -170 20 -224 1z"
                                    />
                                    <path d="M7010 1515 l0 -435 70 0 70 0 0 435 0 435 -70 0 -70 0 0 -435z" />
                                    <path
                                        d="M7200 1944 c0 -3 70 -98 155 -210 95 -125 153 -210 148 -217 -4 -7 -77 -102 -162 -212 -85 -110 -159 -206 -164 -212 -7 -10 10 -13 80 -13 l90 0 122 170 c68 94 124 170 125 170 1 0 58 -76 127 -170 l124 -169 93 -1 c50 0 92 2 92 4 0 2 -74 102 -165 222 -91 120 -164 223 -161 230 2 6 70 100 150 208 80 108 146 198 146 201 0 3 -35 5 -78 5 l-78 0 -114 -155 c-63 -85 -117 -154 -120 -154 -3 0 -54 69 -115 154 l-110 154 -92 1 c-51 0 -93 -3 -93 -6z"
                                    />
                                    <path
                                        d="M8098 1934 c-79 -42 -76 -179 4 -220 42 -22 105 -20 137 4 69 49 76 139 16 199 -28 28 -40 33 -81 33 -27 -1 -61 -7 -76 -16z m144 -31 c57 -54 43 -144 -27 -177 -41 -20 -58 -20 -95 -1 -41 21 -60 53 -60 100 0 100 110 147 182 78z"
                                    />
                                    <path
                                        d="M8120 1830 c0 -40 4 -70 10 -70 6 0 10 14 10 30 0 19 5 30 14 30 8 0 23 -13 33 -30 9 -16 21 -30 25 -30 12 0 10 14 -6 35 -12 16 -12 22 1 41 23 36 2 64 -47 64 l-40 0 0 -70z m75 30 c0 -9 -11 -16 -27 -18 -23 -3 -28 1 -28 18 0 17 5 21 28 18 16 -2 27 -9 27 -18z"
                                    />
                                    <path d="M1653 992 c-104 -36 -191 -127 -225 -234 -54 -171 32 -358 200 -436 82 -38 203 -38 284 0 77 36 142 98 178 172 118 238 -55 515 -320 515 -36 0 -88 -7 -117 -17z" />
                                    <path
                                        d="M5290 855 c0 -8 9 -15 20 -15 18 0 20 -7 20 -80 0 -77 -1 -80 -19 -70 -11 5 -38 10 -61 10 -102 0 -148 -138 -69 -204 36 -30 92 -35 127 -10 20 14 22 14 22 0 0 -12 10 -16 35 -16 24 0 35 5 35 15 0 8 -9 15 -20 15 -19 0 -20 7 -20 185 l0 185 -35 0 c-24 0 -35 -5 -35 -15z m27 -196 c20 -18 17 -122 -4 -141 -29 -26 -60 -30 -91 -14 -34 17 -42 34 -42 82 0 44 15 72 43 84 25 11 74 5 94 -11z"
                                    />
                                    <path
                                        d="M6240 855 c0 -8 9 -15 20 -15 19 0 20 -7 20 -170 0 -163 -1 -170 -20 -170 -11 0 -20 -7 -20 -15 0 -12 13 -15 55 -15 42 0 55 3 55 15 0 8 -9 15 -20 15 -19 0 -20 7 -20 185 l0 185 -35 0 c-24 0 -35 -5 -35 -15z"
                                    />
                                    <path d="M3274 805 c-8 -20 4 -35 26 -35 23 0 32 13 24 34 -8 20 -43 21 -50 1z" />
                                    <path d="M4427 807 c-8 -21 8 -39 29 -35 27 5 25 42 -2 46 -12 2 -24 -3 -27 -11z" />
                                    <path d="M7014 805 c-8 -20 4 -35 27 -35 14 0 19 7 19 25 0 18 -5 25 -20 25 -11 0 -23 -7 -26 -15z" />
                                    <path
                                        d="M6803 763 c-7 -2 -13 -18 -13 -34 0 -22 -5 -29 -20 -29 -11 0 -20 -7 -20 -15 0 -8 9 -15 20 -15 18 0 20 -7 20 -72 0 -98 14 -123 65 -123 28 0 41 5 43 15 2 11 -6 15 -30 15 l-33 0 -3 83 -3 82 36 0 c24 0 35 4 35 15 0 10 -11 15 -35 15 -33 0 -35 2 -35 35 0 35 -3 38 -27 28z"
                                    />
                                    <path
                                        d="M3250 685 c0 -8 9 -15 20 -15 18 0 20 -7 20 -85 0 -78 -2 -85 -20 -85 -11 0 -20 -7 -20 -15 0 -12 13 -15 55 -15 42 0 55 3 55 15 0 8 -9 15 -20 15 -19 0 -20 7 -20 100 l0 100 -35 0 c-24 0 -35 -5 -35 -15z"
                                    />
                                    <path
                                        d="M3440 685 c0 -8 9 -15 20 -15 18 0 20 -7 20 -85 0 -78 -2 -85 -20 -85 -11 0 -20 -7 -20 -15 0 -12 13 -15 55 -15 42 0 55 3 55 15 0 8 -9 15 -20 15 -19 0 -21 5 -18 66 3 59 6 69 30 87 30 23 76 26 89 6 5 -8 9 -47 9 -86 0 -58 -3 -73 -15 -73 -8 0 -15 -7 -15 -15 0 -11 12 -15 50 -15 38 0 50 4 50 15 0 8 -9 15 -20 15 -18 0 -20 7 -20 84 0 64 -4 88 -16 100 -22 22 -80 20 -115 -5 l-29 -20 0 20 c0 17 -6 21 -35 21 -24 0 -35 -5 -35 -15z"
                                    />
                                    <path
                                        d="M3817 682 c-21 -23 -22 -65 -3 -81 8 -6 38 -19 67 -29 46 -14 54 -21 54 -42 0 -17 -7 -27 -26 -34 -37 -13 -79 0 -79 24 0 13 -7 20 -20 20 -28 0 -26 -35 2 -54 29 -21 107 -20 136 0 18 12 22 24 20 52 -3 36 -5 38 -70 61 -69 24 -83 42 -56 69 18 18 68 15 75 -5 13 -37 43 -38 43 -3 0 26 -29 40 -83 40 -30 0 -49 -6 -60 -18z"
                                    />
                                    <path
                                        d="M4050 685 c0 -8 9 -15 20 -15 19 0 20 -7 20 -140 0 -133 -1 -140 -20 -140 -11 0 -20 -7 -20 -15 0 -12 13 -15 60 -15 47 0 60 3 60 15 0 9 -9 15 -25 15 -23 0 -25 3 -25 51 0 45 2 50 18 43 9 -4 36 -9 58 -12 35 -3 47 1 74 25 55 50 50 161 -9 193 -29 15 -93 12 -119 -6 -20 -14 -22 -14 -22 0 0 12 -10 16 -35 16 -24 0 -35 -5 -35 -15z m202 -32 c25 -22 31 -66 15 -106 -19 -43 -58 -59 -107 -43 -34 11 -35 13 -38 69 -3 62 6 82 43 98 25 10 65 2 87 -18z"
                                    />
                                    <path
                                        d="M4400 685 c0 -8 9 -15 20 -15 18 0 20 -7 20 -85 0 -78 -2 -85 -20 -85 -11 0 -20 -7 -20 -15 0 -12 13 -15 55 -15 42 0 55 3 55 15 0 8 -9 15 -20 15 -19 0 -20 7 -20 100 l0 100 -35 0 c-24 0 -35 -5 -35 -15z"
                                    />
                                    <path
                                        d="M4600 685 c0 -8 7 -15 15 -15 12 0 15 -16 15 -85 0 -69 -3 -85 -15 -85 -8 0 -15 -7 -15 -15 0 -12 13 -15 55 -15 42 0 55 3 55 15 0 8 -9 15 -20 15 -18 0 -20 7 -20 65 0 52 4 69 20 85 16 16 24 18 40 10 25 -13 40 -5 40 21 0 26 -51 26 -75 -1 -10 -11 -22 -20 -27 -20 -4 0 -8 9 -8 20 0 16 -7 20 -30 20 -20 0 -30 -5 -30 -15z"
                                    />
                                    <path
                                        d="M4869 671 c-24 -24 -29 -38 -29 -76 0 -86 39 -125 124 -125 41 0 88 22 74 35 -3 4 -22 2 -41 -3 -47 -13 -84 -4 -107 26 -37 46 -29 52 70 52 l90 0 0 29 c0 17 -11 42 -26 60 -22 27 -32 31 -76 31 -41 0 -54 -5 -79 -29z m126 -16 c45 -44 34 -55 -50 -55 -77 0 -84 4 -64 41 22 42 80 49 114 14z"
                                    />
                                    <path
                                        d="M5670 680 c-41 -41 -19 -83 54 -104 29 -9 59 -23 67 -32 11 -14 10 -19 -10 -35 -35 -29 -96 -20 -96 13 0 15 -37 18 -42 3 -8 -26 25 -48 80 -53 50 -4 58 -2 81 21 46 46 26 84 -55 107 -62 18 -84 44 -55 66 32 23 75 18 86 -11 10 -25 40 -26 40 0 0 44 -112 63 -150 25z"
                                    />
                                    <path
                                        d="M5971 686 c-33 -18 -50 -53 -51 -104 0 -37 6 -50 34 -78 29 -29 41 -34 81 -34 40 0 52 5 81 34 27 27 34 42 34 75 0 53 -17 89 -51 107 -35 17 -96 18 -128 0z m116 -30 c37 -32 40 -103 6 -138 -30 -30 -86 -30 -116 0 -34 35 -31 106 6 138 15 13 39 24 52 24 13 0 37 -11 52 -24z"
                                    />
                                    <path
                                        d="M6420 685 c0 -8 6 -15 14 -15 11 0 15 -21 17 -86 3 -71 7 -88 23 -100 28 -20 79 -17 110 7 l26 20 0 -20 c0 -17 6 -21 35 -21 24 0 35 5 35 15 0 8 -7 15 -15 15 -12 0 -15 18 -15 100 l0 100 -35 0 c-24 0 -35 -5 -35 -15 0 -8 7 -15 15 -15 12 0 15 -14 15 -69 0 -63 -2 -70 -26 -85 -14 -10 -39 -16 -57 -14 l-32 3 -3 98 -3 97 -34 0 c-24 0 -35 -5 -35 -15z"
                                    />
                                    <path
                                        d="M6990 685 c0 -8 9 -15 20 -15 18 0 20 -7 20 -85 0 -78 -2 -85 -20 -85 -11 0 -20 -7 -20 -15 0 -12 13 -15 55 -15 42 0 55 3 55 15 0 8 -9 15 -20 15 -19 0 -20 7 -20 100 l0 100 -35 0 c-24 0 -35 -5 -35 -15z"
                                    />
                                    <path
                                        d="M7227 680 c-37 -29 -52 -83 -38 -131 16 -54 52 -79 113 -79 41 0 54 5 78 28 53 53 49 138 -8 182 -34 27 -110 27 -145 0z m112 -15 c33 -17 41 -33 41 -83 -1 -43 -16 -67 -53 -81 -54 -21 -107 22 -107 83 1 43 12 65 45 84 27 15 41 15 74 -3z"
                                    />
                                    <path
                                        d="M7510 685 c0 -8 7 -15 15 -15 12 0 15 -16 15 -85 0 -69 -3 -85 -15 -85 -8 0 -15 -7 -15 -15 0 -11 12 -15 50 -15 38 0 50 4 50 15 0 8 -7 15 -15 15 -12 0 -15 14 -15 70 0 63 2 71 25 86 29 19 71 22 88 5 6 -6 13 -45 15 -86 4 -71 3 -75 -17 -75 -12 0 -21 -6 -21 -15 0 -12 13 -15 55 -15 42 0 55 3 55 15 0 8 -9 15 -20 15 -18 0 -20 7 -20 73 0 95 -14 121 -64 125 -28 2 -47 -3 -68 -18 -28 -21 -28 -21 -28 0 0 16 -6 20 -35 20 -24 0 -35 -5 -35 -15z"
                                    />
                                    <path
                                        d="M7882 684 c-30 -21 -30 -69 1 -88 12 -7 36 -17 52 -20 36 -9 75 -33 75 -46 0 -5 -11 -17 -25 -26 -34 -22 -95 -12 -95 16 0 24 -28 27 -37 3 -20 -51 116 -75 162 -28 44 43 26 78 -55 104 -64 21 -84 45 -56 67 32 23 75 18 86 -11 10 -25 40 -26 40 0 0 41 -102 62 -148 29z"
                                    />
                                </g>
                            </svg>
                        </div>
                        @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Dashboard
                            </a>
                            @else
                            <a
                                href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Log in
                            </a>

                            @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </a>
                            @endif @endauth
                        </nav>
                        @endif
                    </header>

                    <main class="mt-6">
                        <form id="myForm">
                            @csrf
                            <!-- Include CSRF token -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputSection">Section</label>
                                    <input type="text" class="form-control" name="section" id="inputSection" placeholder="Section" />
                                    {{--<select name="section_id" class="form-control js-example-tags">
                                        @foreach($sections as $section)
                                        <option value="{{$section->id}}">{{$section->name}}</option>
                                        @endforeach
                                    </select>--}}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputModule">Module</label>
                                    <input type="text" class="form-control" name="module" id="inputModule" placeholder="Module" />
                                    {{--<select name="module_id" class="form-control js-example-tags">
                                        @foreach($modules as $module)
                                        <option value="{{$module->id}}">{{$module->name}}</option>
                                        @endforeach
                                    </select>--}}
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmployers">Employers</label>
                                <input type="number" class="form-control" name="employers" id="inputEmployers" placeholder="Employers" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPlant">Plant</label>
                                <input type="number" class="form-control" name="plant" id="inputPlant" placeholder="Plant" />
                            </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
                </div>
            </div>
        </div>
    </body>
    <script>
       $(".js-example-tags").select2({
    tags: true,
    createTag: function (params) {
        var term = $.trim(params.term);

        // Check if the tag already exists
        if (term === 'new' || term === '') {
            return null;
        }

        // Return an object for the new tag with the term as both the ID and text
        return {
            id: term,
            text: term
        };
    }
}).on('select2:tagging', function (e) {
    // If a new tag is created and its value is 'new', select it
    if (e.params.data.text === 'new') {
        $(this).val(e.params.data.id).trigger('change');
    }
});

    </script>
    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (event) {
                // Prevent default form submission
                event.preventDefault();

                // Serialize form data
                var formData = $(this).serialize();

                // Get CSRF token value
                var csrfToken = $('meta[name="csrf-token"]').attr("content");

                // Send AJAX request
                $.ajax({
                    url: "/insert-data",
                    type: "POST",
                    data: formData,
                    headers: {
                        "X-CSRF-TOKEN": csrfToken, // Send CSRF token in headers
                    },
                    success: function (response) {
                        // Handle successful response
                        console.log(response);
                    },
                    error: function (xhr, status, error) {
                        // Handle error
                        console.error(xhr.responseText);
                    },
                });
            });
        });
    </script>
</html>
