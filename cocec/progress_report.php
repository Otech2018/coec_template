<?php 
include('inc/connect.php');

$page = 'about';
?>



<!DOCTYPE html>
<!-- saved from url=(0054)https://www.bootdey.com/snippets/preview/dark-timeline -->
<html lang="en">
 
  
  <meta charset="utf-8">
        <title>PROGRESS REPORT | COEC - Community Outreach for Educational Change.html</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <?php include('inc/top.php');?>
    
    <style>
      @import url(https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&display=swap);
    </style>
    <style>
      
      @font-face {
        font-family: "SofiaPro";
        font-style: normal;
        font-weight: 300;
        src: url(/150720bb1f8e1d4cd5bf.woff2) format("woff2"),
          url(/95be63f014dca7c7d2e0.woff) format("woff");
      }
      @font-face {
        font-family: "SofiaPro";
        font-style: normal;
        font-weight: 400;
        src: url(/c64c7cfb75e2e49dd98d.woff2) format("woff2"),
          url(/cb9ef5cae9812fd54c18.woff) format("woff");
      }
      @font-face {
        font-family: "SofiaPro";
        font-style: normal;
        font-weight: 500;
        src: url(/7ac30946d57c5e356c30.woff2) format("woff2"),
          url(/345f4a27750c7e5c044e.woff) format("woff");
      }

      /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy9hc3NldHMvZm9udHMvZm9udHMuY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztDQXVCQzs7QUFFRCxnRUFBZ0U7QUFDaEUscURBQXFEOztBQUlyRDtFQUNFLHVCQUF1QjtFQUN2QixrQkFBa0I7RUFDbEIsZ0JBQWdCO0VBQ2hCLG9IQUErRztBQUNqSDtBQUNBO0VBQ0UsdUJBQXVCO0VBQ3ZCLGtCQUFrQjtFQUNsQixnQkFBZ0I7RUFDaEIsb0hBQW1IO0FBQ3JIO0FBQ0E7RUFDRSx1QkFBdUI7RUFDdkIsa0JBQWtCO0VBQ2xCLGdCQUFnQjtFQUNoQixvSEFBaUg7QUFDbkgiLCJzb3VyY2VzQ29udGVudCI6WyIvKipcbiAqIEBsaWNlbnNlXG4gKiBNeUZvbnRzIFdlYmZvbnQgQnVpbGQgSUQgMzk2MDUxMiwgMjAyMC0xMC0xNFQwOTo0NzoyNy0wNDAwXG4gKlxuICogVGhlIGZvbnRzIGxpc3RlZCBpbiB0aGlzIG5vdGljZSBhcmUgc3ViamVjdCB0byB0aGUgRW5kIFVzZXIgTGljZW5zZVxuICogQWdyZWVtZW50KHMpIGVudGVyZWQgaW50byBieSB0aGUgd2Vic2l0ZSBvd25lci4gQWxsIG90aGVyIHBhcnRpZXMgYXJlXG4gKiBleHBsaWNpdGx5IHJlc3RyaWN0ZWQgZnJvbSB1c2luZyB0aGUgTGljZW5zZWQgV2ViZm9udHMocykuXG4gKlxuICogWW91IG1heSBvYnRhaW4gYSB2YWxpZCBsaWNlbnNlIGF0IHRoZSBVUkxzIGJlbG93LlxuICpcbiAqIFdlYmZvbnQ6IFNvZmlhUHJvLUxpZ2h0IGJ5IE1vc3RhcmRlc2lnblxuICogVVJMOiBodHRwczovL3d3dy5teWZvbnRzLmNvbS9mb250cy9tb3N0YXJkZXNpZ24vc29maWEtcHJvL2xpZ2h0L1xuICpcbiAqIFdlYmZvbnQ6IFNvZmlhUHJvLVJlZ3VsYXIgYnkgTW9zdGFyZGVzaWduXG4gKiBVUkw6IGh0dHBzOi8vd3d3Lm15Zm9udHMuY29tL2ZvbnRzL21vc3RhcmRlc2lnbi9zb2ZpYS1wcm8vcmVndWxhci9cbiAqXG4gKiBXZWJmb250OiBTb2ZpYVByby1NZWRpdW0gYnkgTW9zdGFyZGVzaWduXG4gKiBVUkw6IGh0dHBzOi8vd3d3Lm15Zm9udHMuY29tL2ZvbnRzL21vc3RhcmRlc2lnbi9zb2ZpYS1wcm8vbWVkaXVtL1xuICpcbiAqXG4gKiBXZWJmb250cyBjb3B5cmlnaHQ6IENvcHlyaWdodCDCqSBPbGl2aWVyIEdvdXJ2YXQgLSBNb3N0YXJkZXNpZ24gVHlwZSBGb3VuZHJ5LCAyMDIwLiBBbGwgcmlnaHRzIHJlc2VydmVkLlxuICpcbiAqIMKpIDIwMjAgTXlGb250cyBJbmNcbiovXG5cbi8qIEBpbXBvcnQgbXVzdCBiZSBhdCB0b3Agb2YgZmlsZSwgb3RoZXJ3aXNlIENTUyB3aWxsIG5vdCB3b3JrICovXG4vKiBAaW1wb3J0IHVybCgnLy9oZWxsby5teWZvbnRzLm5ldC9jb3VudC8zY2FhM2EnKTsgKi9cblxuQGltcG9ydCB1cmwoJ2h0dHBzOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzMj9mYW1pbHk9T3BlbitTYW5zOndnaHRANDAwOzUwMDs2MDAmZGlzcGxheT1zd2FwJyk7XG5cbkBmb250LWZhY2Uge1xuICBmb250LWZhbWlseTogJ1NvZmlhUHJvJztcbiAgZm9udC1zdHlsZTogbm9ybWFsO1xuICBmb250LXdlaWdodDogMzAwO1xuICBzcmM6IHVybCgnLi9Tb2ZpYVByby9Tb2ZpYVByb0xpZ2h0LndvZmYyJykgZm9ybWF0KCd3b2ZmMicpLCB1cmwoJy4vU29maWFQcm8vU29maWFQcm9MaWdodC53b2ZmJykgZm9ybWF0KCd3b2ZmJyk7XG59XG5AZm9udC1mYWNlIHtcbiAgZm9udC1mYW1pbHk6ICdTb2ZpYVBybyc7XG4gIGZvbnQtc3R5bGU6IG5vcm1hbDtcbiAgZm9udC13ZWlnaHQ6IDQwMDtcbiAgc3JjOiB1cmwoJy4vU29maWFQcm8vU29maWFQcm9SZWd1bGFyLndvZmYyJykgZm9ybWF0KCd3b2ZmMicpLCB1cmwoJy4vU29maWFQcm8vU29maWFQcm9SZWd1bGFyLndvZmYnKSBmb3JtYXQoJ3dvZmYnKTtcbn1cbkBmb250LWZhY2Uge1xuICBmb250LWZhbWlseTogJ1NvZmlhUHJvJztcbiAgZm9udC1zdHlsZTogbm9ybWFsO1xuICBmb250LXdlaWdodDogNTAwO1xuICBzcmM6IHVybCgnLi9Tb2ZpYVByby9Tb2ZpYVByb01lZGl1bS53b2ZmMicpIGZvcm1hdCgnd29mZjInKSwgdXJsKCcuL1NvZmlhUHJvL1NvZmlhUHJvTWVkaXVtLndvZmYnKSBmb3JtYXQoJ3dvZmYnKTtcbn1cbiJdLCJzb3VyY2VSb290IjoiIn0= */
    </style>
    <style>
     
      [class^="wt-"],
      [class*=" wt-"] {
        border-width: 0;
        border-style: solid;
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
      .wt-sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0;
      }
      .wt-invisible {
        visibility: hidden;
      }
      .wt-fixed {
        position: fixed;
      }
      .wt-absolute {
        position: absolute;
      }
      .wt-relative {
        position: relative;
      }
      .wt-inset-0 {
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
      }
      .wt-bottom-1 {
        bottom: 0.25rem;
      }
      .wt-left-6 {
        left: 1.5rem;
      }
      .wt-right-1 {
        right: 0.25rem;
      }
      .wt-right-4 {
        right: 1rem;
      }
      .wt-top-1 {
        top: 0.25rem;
      }
      .wt-top-2 {
        top: 0.5rem;
      }
      .-wt-z-10 {
        z-index: -10;
      }
      .wt-z-10 {
        z-index: 10;
      }
      .wt-z-\[10000\] {
        z-index: 10000;
      }
      .wt-m-0 {
        margin: 0px;
      }
      .wt-m-10 {
        margin: 2.5rem;
      }
      .wt-m-20 {
        margin: 5rem;
      }
      .wt-mx-2 {
        margin-left: 0.5rem;
        margin-right: 0.5rem;
      }
      .wt-my-2 {
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
      }
      .wt-my-2\.5 {
        margin-top: 0.625rem;
        margin-bottom: 0.625rem;
      }
      .wt-mb-2 {
        margin-bottom: 0.5rem;
      }
      .wt-mb-3 {
        margin-bottom: 0.75rem;
      }
      .wt-mb-8 {
        margin-bottom: 2rem;
      }
      .wt-mb-\[2px\] {
        margin-bottom: 2px;
      }
      .wt-mb-\[3px\] {
        margin-bottom: 3px;
      }
      .wt-ml-1 {
        margin-left: 0.25rem;
      }
      .wt-ml-2 {
        margin-left: 0.5rem;
      }
      .wt-ml-auto {
        margin-left: auto;
      }
      .wt-mr-1 {
        margin-right: 0.25rem;
      }
      .wt-mr-2 {
        margin-right: 0.5rem;
      }
      .wt-mr-4 {
        margin-right: 1rem;
      }
      .wt-mr-\[12px\] {
        margin-right: 12px;
      }
      .wt-mt-1 {
        margin-top: 0.25rem;
      }
      .wt-mt-\[12px\] {
        margin-top: 12px;
      }
      .wt-box-border {
        box-sizing: border-box;
      }
      .wt-block {
        display: block;
      }
      .wt-inline-block {
        display: inline-block;
      }
      .wt-flex {
        display: flex;
      }
      .wt-inline-flex {
        display: inline-flex;
      }
      .wt-h-10 {
        height: 2.5rem;
      }
      .wt-h-12 {
        height: 3rem;
      }
      .wt-h-2 {
        height: 0.5rem;
      }
      .wt-h-3 {
        height: 0.75rem;
      }
      .wt-h-4 {
        height: 1rem;
      }
      .wt-h-5 {
        height: 1.25rem;
      }
      .wt-h-6 {
        height: 1.5rem;
      }
      .wt-h-8 {
        height: 2rem;
      }
      .wt-h-9 {
        height: 2.25rem;
      }
      .wt-h-fit {
        height: -moz-fit-content;
        height: fit-content;
      }
      .wt-max-h-80 {
        max-height: 20rem;
      }
      .wt-max-h-\[250px\] {
        max-height: 250px;
      }
      .wt-max-h-\[428px\] {
        max-height: 428px;
      }
      .wt-min-h-\[190px\] {
        min-height: 190px;
      }
      .wt-min-h-full {
        min-height: 100%;
      }
      .wt-min-h-screen {
        min-height: 100vh;
      }
      .wt-w-10 {
        width: 2.5rem;
      }
      .wt-w-12 {
        width: 3rem;
      }
      .wt-w-2 {
        width: 0.5rem;
      }
      .wt-w-4 {
        width: 1rem;
      }
      .wt-w-40 {
        width: 10rem;
      }
      .wt-w-48 {
        width: 12rem;
      }
      .wt-w-5 {
        width: 1.25rem;
      }
      .wt-w-6 {
        width: 1.5rem;
      }
      .wt-w-60 {
        width: 15rem;
      }
      .wt-w-72 {
        width: 18rem;
      }
      .wt-w-8 {
        width: 2rem;
      }
      .wt-w-80 {
        width: 20rem;
      }
      .wt-w-\[100\%\] {
        width: 100%;
      }
      .wt-w-\[200px\] {
        width: 200px;
      }
      .wt-w-\[328px\] {
        width: 328px;
      }
      .wt-w-\[360px\] {
        width: 360px;
      }
      .wt-w-\[380px\] {
        width: 380px;
      }
      .wt-w-\[400px\] {
        width: 400px;
      }
      .wt-w-\[420px\] {
        width: 420px;
      }
      .wt-w-\[520px\] {
        width: 520px;
      }
      .wt-w-\[600px\] {
        width: 600px;
      }
      .wt-w-auto {
        width: auto;
      }
      .wt-w-fit {
        width: -moz-fit-content;
        width: fit-content;
      }
      .wt-w-full {
        width: 100%;
      }
      .wt-min-w-0 {
        min-width: 0px;
      }
      .wt-min-w-\[160px\] {
        min-width: 160px;
      }
      .wt-min-w-\[300px\] {
        min-width: 300px;
      }
      .wt-max-w-\[600px\] {
        max-width: 600px;
      }
      .wt-max-w-full {
        max-width: 100%;
      }
      .wt-max-w-md {
        max-width: 28rem;
      }
      .wt-flex-1 {
        flex: 1 1 0%;
      }
      .wt-flex-none {
        flex: none;
      }
      .wt-grow {
        flex-grow: 1;
      }
      .wt-rotate-45 {
        --tw-rotate: 45deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
      }
      .wt-scale-100 {
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
      }
      .wt-scale-95 {
        --tw-scale-x: 0.95;
        --tw-scale-y: 0.95;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
      }
      .wt-transform {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
      }
      @keyframes wt-pulse {
        50% {
          opacity: 0.5;
        }
      }
      .wt-animate-pulse {
        animation: wt-pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
      }
      .wt-cursor-default {
        cursor: default;
      }
      .wt-cursor-pointer {
        cursor: pointer;
      }
      .wt-select-none {
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .wt-flex-row-reverse {
        flex-direction: row-reverse;
      }
      .wt-flex-col {
        flex-direction: column;
      }
      .wt-flex-wrap {
        flex-wrap: wrap;
      }
      .wt-items-end {
        align-items: flex-end;
      }
      .wt-items-center {
        align-items: center;
      }
      .wt-justify-end {
        justify-content: flex-end;
      }
      .wt-justify-center {
        justify-content: center;
      }
      .wt-justify-between {
        justify-content: space-between;
      }
      .wt-justify-evenly {
        justify-content: space-evenly;
      }
      .wt-gap-1 {
        gap: 0.25rem;
      }
      .wt-gap-2 {
        gap: 0.5rem;
      }
      .wt-gap-3 {
        gap: 0.75rem;
      }
      .wt-gap-4 {
        gap: 1rem;
      }
      .wt-gap-\[14px\] {
        gap: 14px;
      }
      .wt-gap-\[3px\] {
        gap: 3px;
      }
      .wt-gap-x-1 {
        -moz-column-gap: 0.25rem;
        column-gap: 0.25rem;
      }
      .wt-gap-x-2 {
        -moz-column-gap: 0.5rem;
        column-gap: 0.5rem;
      }
      .wt-space-y-2 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
      }
      .wt-overflow-auto {
        overflow: auto;
      }
      .wt-overflow-hidden {
        overflow: hidden;
      }
      .wt-overflow-y-auto {
        overflow-y: auto;
      }
      .wt-overflow-x-hidden {
        overflow-x: hidden;
      }
      .wt-overflow-ellipsis {
        text-overflow: ellipsis;
      }
      .wt-whitespace-nowrap {
        white-space: nowrap;
      }
      .wt-whitespace-pre-wrap {
        white-space: pre-wrap;
      }
      .wt-break-normal {
        overflow-wrap: normal;
        word-break: normal;
      }
      .\!wt-rounded-none {
        border-radius: 0px !important;
      }
      .wt-rounded {
        border-radius: 0.25rem;
      }
      .wt-rounded-3xl {
        border-radius: 1.5rem;
      }
      .wt-rounded-\[10px\] {
        border-radius: 10px;
      }
      .wt-rounded-\[30px\] {
        border-radius: 30px;
      }
      .wt-rounded-\[4px\] {
        border-radius: 4px;
      }
      .wt-rounded-full {
        border-radius: 9999px;
      }
      .wt-rounded-lg {
        border-radius: 0.5rem;
      }
      .wt-rounded-sm {
        border-radius: 0.125rem;
      }
      .wt-rounded-b {
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
      }
      .wt-rounded-t {
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
      }
      .wt-border {
        border-width: 1px;
      }
      .\!wt-border-t {
        border-top-width: 1px !important;
      }
      .wt-border-b {
        border-bottom-width: 1px;
      }
      .wt-border-b-2 {
        border-bottom-width: 2px;
      }
      .wt-border-t-2 {
        border-top-width: 2px;
      }
      .wt-border-error-light {
        --tw-border-opacity: 1;
        border-color: rgb(248 128 120 / var(--tw-border-opacity));
      }
      .wt-border-error-main {
        --tw-border-opacity: 1;
        border-color: rgb(244 71 47 / var(--tw-border-opacity));
      }
      .wt-border-gray-dark {
        --tw-border-opacity: 1;
        border-color: rgb(160 162 168 / var(--tw-border-opacity));
      }
      .wt-border-gray-light {
        --tw-border-opacity: 1;
        border-color: rgb(230 232 238 / var(--tw-border-opacity));
      }
      .wt-border-gray-lighter {
        --tw-border-opacity: 1;
        border-color: rgb(245 246 249 / var(--tw-border-opacity));
      }
      .wt-border-info-main {
        --tw-border-opacity: 1;
        border-color: rgb(41 121 255 / var(--tw-border-opacity));
      }
      .wt-border-primary-light {
        --tw-border-opacity: 1;
        border-color: rgb(188 99 223 / var(--tw-border-opacity));
      }
      .wt-border-t-gray-light {
        --tw-border-opacity: 1;
        border-top-color: rgb(230 232 238 / var(--tw-border-opacity));
      }
      .wt-bg-background-light {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity));
      }
      .wt-bg-black {
        --tw-bg-opacity: 1;
        background-color: rgb(0 0 0 / var(--tw-bg-opacity));
      }
      .wt-bg-error-main {
        --tw-bg-opacity: 1;
        background-color: rgb(244 71 47 / var(--tw-bg-opacity));
      }
      .wt-bg-error-main\/10 {
        background-color: rgb(244 71 47 / 0.1);
      }
      .wt-bg-gray-lighter {
        --tw-bg-opacity: 1;
        background-color: rgb(245 246 249 / var(--tw-bg-opacity));
      }
      .wt-bg-gray-lightest {
        --tw-bg-opacity: 1;
        background-color: rgb(249 249 252 / var(--tw-bg-opacity));
      }
      .wt-bg-gray-main {
        --tw-bg-opacity: 1;
        background-color: rgb(195 198 206 / var(--tw-bg-opacity));
      }
      .wt-bg-info-lightest {
        --tw-bg-opacity: 1;
        background-color: rgb(234 242 255 / var(--tw-bg-opacity));
      }
      .wt-bg-neutral-default {
        --tw-bg-opacity: 1;
        background-color: rgb(28 28 30 / var(--tw-bg-opacity));
      }
      .wt-bg-neutral-disabled-secondary {
        --tw-bg-opacity: 1;
        background-color: rgb(229 229 234 / var(--tw-bg-opacity));
      }
      .wt-bg-primary-lightest {
        --tw-bg-opacity: 1;
        background-color: rgb(251 243 255 / var(--tw-bg-opacity));
      }
      .wt-bg-primary-main {
        --tw-bg-opacity: 1;
        background-color: rgb(139 10 190 / var(--tw-bg-opacity));
      }
      .wt-bg-primary-main\/5 {
        background-color: rgb(139 10 190 / 0.05);
      }
      .wt-bg-tranparant {
        background-color: transparent;
      }
      .wt-bg-white {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity));
      }
      .wt-p-0 {
        padding: 0px;
      }
      .wt-p-1 {
        padding: 0.25rem;
      }
      .wt-p-10 {
        padding: 2.5rem;
      }
      .wt-p-2 {
        padding: 0.5rem;
      }
      .wt-p-6 {
        padding: 1.5rem;
      }
      .wt-p-\[6px\] {
        padding: 6px;
      }
      .wt-px-0 {
        padding-left: 0px;
        padding-right: 0px;
      }
      .wt-px-0\.5 {
        padding-left: 0.125rem;
        padding-right: 0.125rem;
      }
      .wt-px-1 {
        padding-left: 0.25rem;
        padding-right: 0.25rem;
      }
      .wt-px-2 {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
      }
      .wt-px-3 {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
      }
      .wt-px-4 {
        padding-left: 1rem;
        padding-right: 1rem;
      }
      .wt-px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
      }
      .wt-py-0 {
        padding-top: 0px;
        padding-bottom: 0px;
      }
      .wt-py-0\.5 {
        padding-top: 0.125rem;
        padding-bottom: 0.125rem;
      }
      .wt-py-1 {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
      }
      .wt-py-1\.5 {
        padding-top: 0.375rem;
        padding-bottom: 0.375rem;
      }
      .wt-py-10 {
        padding-top: 2.5rem;
        padding-bottom: 2.5rem;
      }
      .wt-py-2 {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
      }
      .wt-py-3 {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
      }
      .wt-py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem;
      }
      .wt-py-\[10px\] {
        padding-top: 10px;
        padding-bottom: 10px;
      }
      .wt-py-\[2px\] {
        padding-top: 2px;
        padding-bottom: 2px;
      }
      .wt-py-\[6px\] {
        padding-top: 6px;
        padding-bottom: 6px;
      }
      .wt-pb-2 {
        padding-bottom: 0.5rem;
      }
      .wt-pb-6 {
        padding-bottom: 1.5rem;
      }
      .wt-pb-\[9px\] {
        padding-bottom: 9px;
      }
      .wt-pl-1 {
        padding-left: 0.25rem;
      }
      .wt-pl-2 {
        padding-left: 0.5rem;
      }
      .wt-pl-3 {
        padding-left: 0.75rem;
      }
      .wt-pl-6 {
        padding-left: 1.5rem;
      }
      .wt-pr-2 {
        padding-right: 0.5rem;
      }
      .wt-pr-4 {
        padding-right: 1rem;
      }
      .wt-pr-7 {
        padding-right: 1.75rem;
      }
      .wt-pr-\[14px\] {
        padding-right: 14px;
      }
      .wt-pt-3 {
        padding-top: 0.75rem;
      }
      .wt-text-center {
        text-align: center;
      }
      .wt-text-start {
        text-align: start;
      }
      .wt-indent-1 {
        text-indent: 0.25rem;
      }
      .wt-indent-1\.5 {
        text-indent: 0.375rem;
      }
      .wt-indent-2 {
        text-indent: 0.5rem;
      }
      .wt-indent-2\.5 {
        text-indent: 0.625rem;
      }
      .wt-font-body {
        font-family: "Open Sans", sans-serif;
      }
      .wt-font-sans {
        font-family: SofiaPro, "Open Sans", sans-serif;
      }
      .wt-text-\[10px\] {
        font-size: 10px;
      }
      .wt-text-\[11px\] {
        font-size: 11px;
      }
      .wt-text-\[12px\] {
        font-size: 12px;
      }
      .wt-text-\[14px\] {
        font-size: 14px;
      }
      .wt-text-\[16px\] {
        font-size: 16px;
      }
      .wt-text-\[17px\] {
        font-size: 17px;
      }
      .wt-text-lg {
        font-size: 1.125rem;
        line-height: 1.75rem;
      }
      .wt-text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem;
      }
      .wt-text-xs {
        font-size: 0.75rem;
        line-height: 1rem;
      }
      .wt-font-bold {
        font-weight: 700;
      }
      .wt-font-light {
        font-weight: 300;
      }
      .wt-font-medium {
        font-weight: 500;
      }
      .wt-font-normal {
        font-weight: 400;
      }
      .wt-font-semibold {
        font-weight: 600;
      }
      .wt-leading-5 {
        line-height: 1.25rem;
      }
      .wt-leading-6 {
        line-height: 1.5rem;
      }
      .wt-leading-8 {
        line-height: 2rem;
      }
      .wt-leading-\[14px\] {
        line-height: 14px;
      }
      .wt-tracking-\[\.01em\] {
        letter-spacing: 0.01em;
      }
      .wt-tracking-body {
        letter-spacing: 0.15px;
      }
      .wt-tracking-wide {
        letter-spacing: 0.025em;
      }
      .wt-tracking-wider {
        letter-spacing: 0.05em;
      }
      .wt-tracking-widest {
        letter-spacing: 0.1em;
      }
      .wt-text-black {
        --tw-text-opacity: 1;
        color: rgb(0 0 0 / var(--tw-text-opacity));
      }
      .wt-text-brand-primary {
        --tw-text-opacity: 1;
        color: rgb(139 10 190 / var(--tw-text-opacity));
      }
      .wt-text-error-main {
        --tw-text-opacity: 1;
        color: rgb(244 71 47 / var(--tw-text-opacity));
      }
      .wt-text-gray-dark {
        --tw-text-opacity: 1;
        color: rgb(160 162 168 / var(--tw-text-opacity));
      }
      .wt-text-gray-darker {
        --tw-text-opacity: 1;
        color: rgb(98 99 106 / var(--tw-text-opacity));
      }
      .wt-text-gray-darkest {
        --tw-text-opacity: 1;
        color: rgb(31 33 39 / var(--tw-text-opacity));
      }
      .wt-text-gray-main {
        --tw-text-opacity: 1;
        color: rgb(195 198 206 / var(--tw-text-opacity));
      }
      .wt-text-info-main {
        --tw-text-opacity: 1;
        color: rgb(41 121 255 / var(--tw-text-opacity));
      }
      .wt-text-neutral-default {
        --tw-text-opacity: 1;
        color: rgb(28 28 30 / var(--tw-text-opacity));
      }
      .wt-text-neutral-disabled {
        --tw-text-opacity: 1;
        color: rgb(199 199 204 / var(--tw-text-opacity));
      }
      .wt-text-neutral-secondary {
        --tw-text-opacity: 1;
        color: rgb(72 72 74 / var(--tw-text-opacity));
      }
      .wt-text-primary-main {
        --tw-text-opacity: 1;
        color: rgb(139 10 190 / var(--tw-text-opacity));
      }
      .wt-text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
      }
      .wt-underline {
        text-decoration-line: underline;
      }
      .wt-opacity-0 {
        opacity: 0;
      }
      .wt-opacity-100 {
        opacity: 1;
      }
      .wt-opacity-20 {
        opacity: 0.2;
      }
      .wt-opacity-30 {
        opacity: 0.3;
      }
      .wt-shadow-border {
        --tw-shadow: 0px 0px 0px 0.5px #c3c6ce inset;
        --tw-shadow-colored: inset 0px 0px 0px 0.5px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }
      .wt-shadow-border-left {
        --tw-shadow: 1px 0px 0px 0px #e6e8ee inset;
        --tw-shadow-colored: inset 1px 0px 0px 0px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }
      .wt-shadow-border-right-thick {
        --tw-shadow: -2px 0px 0px 0px #e6e8ee inset;
        --tw-shadow-colored: inset -2px 0px 0px 0px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }
      .wt-shadow-border-top {
        --tw-shadow: 0px -1px 0px #e6e8ee;
        --tw-shadow-colored: 0px -1px 0px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }
      .wt-shadow-card {
        --tw-shadow: 0px 4px 14px rgba(72, 72, 74, 0.2);
        --tw-shadow-colored: 0px 4px 14px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }
      .wt-shadow-toolbar {
        --tw-shadow: 0px 4px 14px rgba(28, 28, 30, 0.05);
        --tw-shadow-colored: 0px 4px 14px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }
      .wt-outline-none {
        outline: 2px solid transparent;
        outline-offset: 2px;
      }
      .wt-outline-0 {
        outline-width: 0px;
      }
      .wt-ring-1 {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
          var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
          calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
          var(--tw-shadow, 0 0 #0000);
      }
      .wt-ring-inset {
        --tw-ring-inset: inset;
      }
      .wt-ring-gray-light {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(230 232 238 / var(--tw-ring-opacity));
      }
      .wt-backdrop-blur-\[15px\] {
        --tw-backdrop-blur: blur(15px);
        -webkit-backdrop-filter: var(--tw-backdrop-blur)
          var(--tw-backdrop-brightness) var(--tw-backdrop-contrast)
          var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate)
          var(--tw-backdrop-invert) var(--tw-backdrop-opacity)
          var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness)
          var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale)
          var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert)
          var(--tw-backdrop-opacity) var(--tw-backdrop-saturate)
          var(--tw-backdrop-sepia);
      }
      .wt-transition {
        transition-property: color, background-color, border-color,
          outline-color, text-decoration-color, fill, stroke, opacity,
          box-shadow, transform, filter, -webkit-backdrop-filter;
        transition-property: color, background-color, border-color,
          outline-color, text-decoration-color, fill, stroke, opacity,
          box-shadow, transform, filter, backdrop-filter;
        transition-property: color, background-color, border-color,
          outline-color, text-decoration-color, fill, stroke, opacity,
          box-shadow, transform, filter, backdrop-filter,
          -webkit-backdrop-filter;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
      }
      .wt-transition-colors {
        transition-property: color, background-color, border-color,
          outline-color, text-decoration-color, fill, stroke;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
      }
      .wt-transition-opacity {
        transition-property: opacity;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
      }
      .wt-duration-100 {
        transition-duration: 100ms;
      }
      .wt-duration-75 {
        transition-duration: 75ms;
      }
      .wt-ease-out {
        transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
      }
      .placeholder\:wt-font-body::-moz-placeholder {
        font-family: "Open Sans", sans-serif;
      }
      .placeholder\:wt-font-body::placeholder {
        font-family: "Open Sans", sans-serif;
      }
      .placeholder\:wt-font-extralight::-moz-placeholder {
        font-weight: 200;
      }
      .placeholder\:wt-font-extralight::placeholder {
        font-weight: 200;
      }
      .placeholder\:wt-leading-5::-moz-placeholder {
        line-height: 1.25rem;
      }
      .placeholder\:wt-leading-5::placeholder {
        line-height: 1.25rem;
      }
      .placeholder\:wt-tracking-\[0\.15px\]::-moz-placeholder {
        letter-spacing: 0.15px;
      }
      .placeholder\:wt-tracking-\[0\.15px\]::placeholder {
        letter-spacing: 0.15px;
      }
      .placeholder\:wt-text-gray-dark::-moz-placeholder {
        --tw-text-opacity: 1;
        color: rgb(160 162 168 / var(--tw-text-opacity));
      }
      .placeholder\:wt-text-gray-dark::placeholder {
        --tw-text-opacity: 1;
        color: rgb(160 162 168 / var(--tw-text-opacity));
      }
      .before\:wt-h-5::before {
        content: var(--tw-content);
        height: 1.25rem;
      }
      .before\:wt-w-5::before {
        content: var(--tw-content);
        width: 1.25rem;
      }
      .before\:wt-rounded-full::before {
        content: var(--tw-content);
        border-radius: 9999px;
      }
      .before\:wt-bg-white::before {
        content: var(--tw-content);
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity));
      }
      .before\:wt-shadow::before {
        content: var(--tw-content);
        --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1),
          0 1px 2px -1px rgb(0 0 0 / 0.1);
        --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color),
          0 1px 2px -1px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }
      .before\:wt-transition-transform::before {
        content: var(--tw-content);
        transition-property: transform;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
      }
      .before\:wt-duration-300::before {
        content: var(--tw-content);
        transition-duration: 300ms;
      }
      .before\:wt-content-\[\"\"\]::before {
        --tw-content: "";
        content: var(--tw-content);
      }
      .visited\:wt-text-info-main:visited {
        color: rgb(41 121 255);
      }
      .focus-within\:wt-border-primary-light:focus-within {
        --tw-border-opacity: 1;
        border-color: rgb(188 99 223 / var(--tw-border-opacity));
      }
      .hover\:wt-bg-error-dark:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(227 27 12 / var(--tw-bg-opacity));
      }
      .hover\:wt-bg-gray-lighter:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(245 246 249 / var(--tw-bg-opacity));
      }
      .hover\:wt-bg-gray-lightest:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(249 249 252 / var(--tw-bg-opacity));
      }
      .hover\:wt-bg-primary-dark:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(111 8 152 / var(--tw-bg-opacity));
      }
      .hover\:wt-text-brand-hover:hover {
        --tw-text-opacity: 1;
        color: rgb(126 9 173 / var(--tw-text-opacity));
      }
      .hover\:wt-brightness-\[0\.97\]:hover {
        --tw-brightness: brightness(0.97);
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast)
          var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert)
          var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
      }
      .focus\:wt-bg-gray-lightest:focus {
        --tw-bg-opacity: 1;
        background-color: rgb(249 249 252 / var(--tw-bg-opacity));
      }
      .active\:wt-bg-error-darker:active {
        --tw-bg-opacity: 1;
        background-color: rgb(161 18 18 / var(--tw-bg-opacity));
      }
      .active\:wt-bg-error-lightest:active {
        --tw-bg-opacity: 1;
        background-color: rgb(254 236 235 / var(--tw-bg-opacity));
      }
      .active\:wt-bg-gray-light:active {
        --tw-bg-opacity: 1;
        background-color: rgb(230 232 238 / var(--tw-bg-opacity));
      }
      .active\:wt-bg-info-lightest:active {
        --tw-bg-opacity: 1;
        background-color: rgb(234 242 255 / var(--tw-bg-opacity));
      }
      .active\:wt-bg-primary-darker:active {
        --tw-bg-opacity: 1;
        background-color: rgb(82 0 123 / var(--tw-bg-opacity));
      }
      .active\:wt-bg-primary-lightest:active {
        --tw-bg-opacity: 1;
        background-color: rgb(251 243 255 / var(--tw-bg-opacity));
      }
      .enabled\:wt-cursor-pointer:enabled {
        cursor: pointer;
      }
      .wt-group:hover .group-hover\:wt-visible {
        visibility: visible;
      }
      .wt-group:hover .group-hover\:wt-border-error-main {
        --tw-border-opacity: 1;
        border-color: rgb(244 71 47 / var(--tw-border-opacity));
      }
      .wt-group:hover .group-hover\:wt-bg-error-main\/10 {
        background-color: rgb(244 71 47 / 0.1);
      }
      .wt-group:hover .group-hover\:wt-bg-info-main {
        --tw-bg-opacity: 1;
        background-color: rgb(41 121 255 / var(--tw-bg-opacity));
      }
      .wt-group:hover .group-hover\:wt-bg-primary-main\/5 {
        background-color: rgb(139 10 190 / 0.05);
      }
      .wt-group:hover .group-hover\:wt-text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
      }
      .wt-peer:checked ~ .peer-checked\:wt-bg-accent-primary {
        --tw-bg-opacity: 1;
        background-color: rgb(41 121 255 / var(--tw-bg-opacity));
      }
      .wt-peer:checked ~ .peer-checked\:wt-bg-accent-secondary {
        --tw-bg-opacity: 1;
        background-color: rgb(189 213 255 / var(--tw-bg-opacity));
      }
      .wt-peer:checked ~ .peer-checked\:before\:wt-translate-x-full::before {
        content: var(--tw-content);
        --tw-translate-x: 100%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
      }
      .wt-peer:focus-visible ~ .peer-focus-visible\:wt-outline {
        outline-style: solid;
      }
      .wt-peer:focus-visible ~ .peer-focus-visible\:wt-outline-offset-2 {
        outline-offset: 2px;
      }
      .\[\&\:not\(\:last-child\)\]\:wt-border-b:not(:last-child) {
        border-bottom-width: 1px;
      }
      .\[\&\:not\(\:last-child\)\]\:wt-border-gray-light:not(:last-child) {
        --tw-border-opacity: 1;
        border-color: rgb(230 232 238 / var(--tw-border-opacity));
      }

      /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy9hc3NldHMvc3R5bGVzL3RhaWx3aW5kLmNzcyIsIjxubyBzb3VyY2U+Il0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUVBOzs7O0NBSUM7QUFDRDs7RUFFRSxlQUFlO0VBQ2YsbUJBQW1CO0FBQ3JCOztBQUVBO0VBQUEsd0JBQWM7RUFBZCx3QkFBYztFQUFkLG1CQUFjO0VBQWQsbUJBQWM7RUFBZCxjQUFjO0VBQWQsY0FBYztFQUFkLGNBQWM7RUFBZCxlQUFjO0VBQWQsZUFBYztFQUFkLGFBQWM7RUFBZCxhQUFjO0VBQWQsa0JBQWM7RUFBZCxzQ0FBYztFQUFkLGVBQWM7RUFBZCxvQkFBYztFQUFkLHNCQUFjO0VBQWQsdUJBQWM7RUFBZCx3QkFBYztFQUFkLGtCQUFjO0VBQWQsMkJBQWM7RUFBZCw0QkFBYztFQUFkLHNDQUFjO0VBQWQsa0NBQWM7RUFBZCwyQkFBYztFQUFkLHNCQUFjO0VBQWQsOEJBQWM7RUFBZCxZQUFjO0VBQWQsa0JBQWM7RUFBZCxnQkFBYztFQUFkLGlCQUFjO0VBQWQsa0JBQWM7RUFBZCxjQUFjO0VBQWQsZ0JBQWM7RUFBZCxhQUFjO0VBQWQsbUJBQWM7RUFBZCxxQkFBYztFQUFkLDJCQUFjO0VBQWQseUJBQWM7RUFBZCwwQkFBYztFQUFkLDJCQUFjO0VBQWQsdUJBQWM7RUFBZCx3QkFBYztFQUFkLHlCQUFjO0VBQWQ7QUFBYzs7QUFBZDtFQUFBLHdCQUFjO0VBQWQsd0JBQWM7RUFBZCxtQkFBYztFQUFkLG1CQUFjO0VBQWQsY0FBYztFQUFkLGNBQWM7RUFBZCxjQUFjO0VBQWQsZUFBYztFQUFkLGVBQWM7RUFBZCxhQUFjO0VBQWQsYUFBYztFQUFkLGtCQUFjO0VBQWQsc0NBQWM7RUFBZCxlQUFjO0VBQWQsb0JBQWM7RUFBZCxzQkFBYztFQUFkLHVCQUFjO0VBQWQsd0JBQWM7RUFBZCxrQkFBYztFQUFkLDJCQUFjO0VBQWQsNEJBQWM7RUFBZCxzQ0FBYztFQUFkLGtDQUFjO0VBQWQsMkJBQWM7RUFBZCxzQkFBYztFQUFkLDhCQUFjO0VBQWQsWUFBYztFQUFkLGtCQUFjO0VBQWQsZ0JBQWM7RUFBZCxpQkFBYztFQUFkLGtCQUFjO0VBQWQsY0FBYztFQUFkLGdCQUFjO0VBQWQsYUFBYztFQUFkLG1CQUFjO0VBQWQscUJBQWM7RUFBZCwyQkFBYztFQUFkLHlCQUFjO0VBQWQsMEJBQWM7RUFBZCwyQkFBYztFQUFkLHVCQUFjO0VBQWQsd0JBQWM7RUFBZCx5QkFBYztFQUFkO0FBQWM7QUFFZDtFQUFBLGtCQUFtQjtFQUFuQixVQUFtQjtFQUFuQixXQUFtQjtFQUFuQixVQUFtQjtFQUFuQixZQUFtQjtFQUFuQixnQkFBbUI7RUFBbkIsc0JBQW1CO0VBQW5CLG1CQUFtQjtFQUFuQjtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUEsUUFBbUI7RUFBbkIsVUFBbUI7RUFBbkIsV0FBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQSxtQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxrQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxvQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBLHdCQUFtQjtFQUFuQjtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUEsdUJBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQSxrQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxlQUFtQjtFQUFuQixlQUFtQjtFQUFuQjtBQUFtQjtBQUFuQjtFQUFBLGlCQUFtQjtFQUFuQixpQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0lBQUE7RUFBbUI7QUFBQTtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBLHlCQUFtQjtLQUFuQixzQkFBbUI7VUFBbkI7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQSx3QkFBbUI7T0FBbkI7QUFBbUI7QUFBbkI7RUFBQSx1QkFBbUI7T0FBbkI7QUFBbUI7QUFBbkI7RUFBQSx1QkFBbUI7RUFBbkIsOERBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQSxxQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQSxtQ0FBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSwrQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUEsc0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsc0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsc0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsc0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsc0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsc0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsc0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsc0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsa0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsa0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsa0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQSxrQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxrQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxrQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxrQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxrQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxrQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxrQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxrQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUEsa0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUEsaUJBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsc0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEscUJBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsb0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEscUJBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsa0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsb0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsZ0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEscUJBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsb0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEscUJBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsbUJBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsbUJBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsb0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsaUJBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsaUJBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsZ0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsZ0JBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBLG1CQUFtQjtFQUFuQjtBQUFtQjtBQUFuQjtFQUFBLG1CQUFtQjtFQUFuQjtBQUFtQjtBQUFuQjtFQUFBLGtCQUFtQjtFQUFuQjtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQSxvQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxvQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxvQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxvQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxvQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxvQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxvQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxvQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxvQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxvQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxvQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxvQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxvQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUEsNENBQW1CO0VBQW5CLG1FQUFtQjtFQUFuQjtBQUFtQjtBQUFuQjtFQUFBLDBDQUFtQjtFQUFuQixpRUFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSwyQ0FBbUI7RUFBbkIsa0VBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsaUNBQW1CO0VBQW5CLHdEQUFtQjtFQUFuQjtBQUFtQjtBQUFuQjtFQUFBLCtDQUFtQjtFQUFuQix3REFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSxnREFBbUI7RUFBbkIsd0RBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsOEJBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQSwyR0FBbUI7RUFBbkIseUdBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFBbkI7RUFBQSxvQkFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQSw4QkFBbUI7RUFBbkIsK1FBQW1CO1VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsK0tBQW1CO0VBQW5CLHVLQUFtQjtFQUFuQixnTUFBbUI7RUFBbkIsd0RBQW1CO0VBQW5CO0FBQW1CO0FBQW5CO0VBQUEsOEdBQW1CO0VBQW5CLHdEQUFtQjtFQUFuQjtBQUFtQjtBQUFuQjtFQUFBLDRCQUFtQjtFQUFuQix3REFBbUI7RUFBbkI7QUFBbUI7QUFBbkI7RUFBQTtBQUFtQjtBQUFuQjtFQUFBO0FBQW1CO0FBQW5CO0VBQUE7QUFBbUI7QUFmbkI7RUFBQTtDQ0FBO0FEQUE7RUFBQTtDQ0FBO0FEQUE7RUFBQTtDQ0FBO0FEQUE7RUFBQTtDQ0FBO0FEQUE7RUFBQTtDQ0FBO0FEQUE7RUFBQTtDQ0FBO0FEQUE7RUFBQTtDQ0FBO0FEQUE7RUFBQTtDQ0FBO0FEQUE7RUFBQSxxQkNBQTtFREFBO0NDQUE7QURBQTtFQUFBLHFCQ0FBO0VEQUE7Q0NBQTtBREFBO0VBQUEsMkJDQUE7RURBQTtDQ0FBO0FEQUE7RUFBQSwyQkNBQTtFREFBO0NDQUE7QURBQTtFQUFBLDJCQ0FBO0VEQUE7Q0NBQTtBREFBO0VBQUEsMkJDQUE7RURBQSxtQkNBQTtFREFBO0NDQUE7QURBQTtFQUFBLDJCQ0FBO0VEQUEsMkVDQUE7RURBQSwrRkNBQTtFREFBO0NDQUE7QURBQTtFQUFBLDJCQ0FBO0VEQUEsK0JDQUE7RURBQSx5RENBQTtFREFBO0NDQUE7QURBQTtFQUFBLDJCQ0FBO0VEQUE7Q0NBQTtBREFBO0VBQUEsaUJDQUE7RURBQTtDQ0FBO0FEQUE7RUFBQTtDQ0FBO0FEQUE7RUFBQSx1QkNBQTtFREFBO0NDQUE7QURBQTtFQUFBLG1CQ0FBO0VEQUE7Q0NBQTtBREFBO0VBQUEsbUJDQUE7RURBQTtDQ0FBO0FEQUE7RUFBQSxtQkNBQTtFREFBO0NDQUE7QURBQTtFQUFBLG1CQ0FBO0VEQUE7Q0NBQTtBREFBO0VBQUEscUJDQUE7RURBQTtDQ0FBO0FEQUE7RUFBQSxrQ0NBQTtFREFBO0NDQUE7QURBQTtFQUFBLG1CQ0FBO0VEQUE7Q0NBQTtBREFBO0VBQUEsbUJDQUE7RURBQTtDQ0FBO0FEQUE7RUFBQSxtQkNBQTtFREFBO0NDQUE7QURBQTtFQUFBLG1CQ0FBO0VEQUE7Q0NBQTtBREFBO0VBQUEsbUJDQUE7RURBQTtDQ0FBO0FEQUE7RUFBQSxtQkNBQTtFREFBO0NDQUE7QURBQTtFQUFBLG1CQ0FBO0VEQUE7Q0NBQTtBREFBO0VBQUE7Q0NBQTtBREFBO0VBQUE7Q0NBQTtBREFBO0VBQUEsdUJDQUE7RURBQTtDQ0FBO0FEQUE7RUFBQTtDQ0FBO0FEQUE7RUFBQSxtQkNBQTtFREFBO0NDQUE7QURBQTtFQUFBO0NDQUE7QURBQTtFQUFBLHFCQ0FBO0VEQUE7Q0NBQTtBREFBO0VBQUEsbUJDQUE7RURBQTtDQ0FBO0FEQUE7RUFBQSxtQkNBQTtFREFBO0NDQUE7QURBQTtFQUFBLDJCQ0FBO0VEQUEsdUJDQUE7RURBQTtDQ0FBO0FEQUE7RUFBQTtDQ0FBO0FEQUE7RUFBQTtDQ0FBO0FEQUE7RUFBQTtDQ0FBO0FEQUE7RUFBQSx1QkNBQTtFREFBO0NDQUEiLCJzb3VyY2VzQ29udGVudCI6WyJAaW1wb3J0ICcuLi9mb250cy9mb250cy5jc3MnO1xuXG4vKiBcbiAgICBBbGxvdyBhZGRpbmcgYSBib3JkZXIgdG8gYW4gZWxlbWVudCBieSBqdXN0IGFkZGluZyBhIGJvcmRlci13aWR0aC4gKGh0dHBzOiAvL2dpdGh1Yi5jb20vdGFpbHdpbmRjc3MvdGFpbHdpbmRjc3MvcHVsbC8xMTYpXG4gICAgLy8gYnkgZGVmYXVsdCB0aGlzIGdldCBsb2FkZWQgZnJvbSBwcmVmbGlnaHQgc2V0dGluZyAocmVzZXQgY3NzKSwgXG4gICAgLy8gYnV0IHdlIG5lZWQgdG8gc2V0IHRoaXMgdG8gZmFsc2UgYXMgdGhpcyBvdmVycmlkZXMgZXh0ZXJuYWwgc2l0ZXMgdGhhdCBjb250ZW50IGlzIGxvYWRlZCB0b1xuKi9cbltjbGFzc149J3d0LSddLFxuW2NsYXNzKj0nIHd0LSddIHtcbiAgYm9yZGVyLXdpZHRoOiAwO1xuICBib3JkZXItc3R5bGU6IHNvbGlkO1xufVxuXG5AdGFpbHdpbmQgYmFzZTtcbkB0YWlsd2luZCBjb21wb25lbnRzO1xuQHRhaWx3aW5kIHV0aWxpdGllcztcbiIsbnVsbF0sInNvdXJjZVJvb3QiOiIifQ== */
    </style>
    <style type="text/css">
      .lf-progress {
        -webkit-appearance: none;
        -moz-apperance: none;
        width: 100%;
        /* margin: 0 10px; */
        height: 4px;
        border-radius: 3px;
        cursor: pointer;
      }
      .lf-progress:focus {
        outline: none;
        border: none;
      }
      .lf-progress::-moz-range-track {
        cursor: pointer;
        background: none;
        border: none;
        outline: none;
      }
      .lf-progress::-webkit-slider-thumb {
        -webkit-appearance: none !important;
        height: 13px;
        width: 13px;
        border: 0;
        border-radius: 50%;
        background: #0fccce;
        cursor: pointer;
      }
      .lf-progress::-moz-range-thumb {
        -moz-appearance: none !important;
        height: 13px;
        width: 13px;
        border: 0;
        border-radius: 50%;
        background: #0fccce;
        cursor: pointer;
      }
      .lf-progress::-ms-track {
        width: 100%;
        height: 3px;
        cursor: pointer;
        background: transparent;
        border-color: transparent;
        color: transparent;
      }
      .lf-progress::-ms-fill-lower {
        background: #ccc;
        border-radius: 3px;
      }
      .lf-progress::-ms-fill-upper {
        background: #ccc;
        border-radius: 3px;
      }
      .lf-progress::-ms-thumb {
        border: 0;
        height: 15px;
        width: 15px;
        border-radius: 50%;
        background: #0fccce;
        cursor: pointer;
      }
      .lf-progress:focus::-ms-fill-lower {
        background: #ccc;
      }
      .lf-progress:focus::-ms-fill-upper {
        background: #ccc;
      }
      .lf-player-container :focus {
        outline: 0;
      }
      .lf-popover {
        position: relative;
      }

      .lf-popover-content {
        display: inline-block;
        position: absolute;
        opacity: 1;
        visibility: visible;
        transform: translate(0, -10px);
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
        transition: all 0.3s cubic-bezier(0.75, -0.02, 0.2, 0.97);
      }

      .lf-popover-content.hidden {
        opacity: 0;
        visibility: hidden;
        transform: translate(0, 0px);
      }

      .lf-player-btn-container {
        display: flex;
        align-items: center;
      }
      .lf-player-btn {
        cursor: pointer;
        fill: #999;
        width: 14px;
      }

      .lf-player-btn.active {
        fill: #555;
      }

      .lf-popover {
        position: relative;
      }

      .lf-popover-content {
        display: inline-block;
        position: absolute;
        background-color: #ffffff;
        opacity: 1;

        transform: translate(0, -10px);
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
        transition: all 0.3s cubic-bezier(0.75, -0.02, 0.2, 0.97);
        padding: 10px;
      }

      .lf-popover-content.hidden {
        opacity: 0;
        visibility: hidden;
        transform: translate(0, 0px);
      }

      .lf-arrow {
        position: absolute;
        z-index: -1;
        content: "";
        bottom: -9px;
        border-style: solid;
        border-width: 10px 10px 0px 10px;
      }

      .lf-left-align,
      .lf-left-align .lfarrow {
        left: 0;
        right: unset;
      }

      .lf-right-align,
      .lf-right-align .lf-arrow {
        right: 0;
        left: unset;
      }

      .lf-text-input {
        border: 1px #ccc solid;
        border-radius: 5px;
        padding: 3px;
        width: 60px;
        margin: 0;
      }

      .lf-color-picker {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        height: 90px;
      }

      .lf-color-selectors {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }

      .lf-color-component {
        display: flex;
        flex-direction: row;
        font-size: 12px;
        align-items: center;
        justify-content: center;
      }

      .lf-color-component strong {
        width: 40px;
      }

      .lf-color-component input[type="range"] {
        margin: 0 0 0 10px;
      }

      .lf-color-component input[type="number"] {
        width: 50px;
        margin: 0 0 0 10px;
      }

      .lf-color-preview {
        font-size: 12px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        padding-left: 5px;
      }

      .lf-preview {
        height: 60px;
        width: 60px;
      }

      .lf-popover-snapshot {
        width: 150px;
      }
      .lf-popover-snapshot h5 {
        margin: 5px 0 10px 0;
        font-size: 0.75rem;
      }
      .lf-popover-snapshot a {
        display: block;
        text-decoration: none;
      }
      .lf-popover-snapshot a:before {
        content: "⥼";
        margin-right: 5px;
      }
      .lf-popover-snapshot .lf-note {
        display: block;
        margin-top: 10px;
        color: #999;
      }
      .lf-player-controls > div {
        margin-right: 5px;
        margin-left: 5px;
      }
      .lf-player-controls > div:first-child {
        margin-left: 0px;
      }
      .lf-player-controls > div:last-child {
        margin-right: 0px;
      }
    </style>
    <style>
      @font-face {
        font-family: "wticons";
        font-display: block;
        src: url("data:font/woff2;charset=utf-8;base64,d09GMgABAAAAABqYAAsAAAAAMxAAABpGAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHIkYBmAAjBAKwAi0ZQE2AiQDgkQLgSQABCAFhAoHhVIbBiwzknVaE4yK+ig2laIoFZMu+68TuCkiZkX9hQgaZkKF1PRwaF1Kenvvn11cWCw4cBHtFERv7z73C8MqjxySFCYPPGvqv0sGhLpErIBBbyxc5YwiYVCOhcvzXQ7d7IAQzCviwT5QERm2+Ydom/f/0IL/9JxBlAUIYiRtoyhYc2ivtFmGsQpzVc5Ft6sKCbacN0yjlPQuCUIQghuM8VKoed+pSc2OJGdoCA04I2DBAOiP8iPdp/TuzxA6Ttsk7YDZsa+ZyxBC+1VrzjXCHjJywCyLpx8B8z9n2uSOFWVALBSRRSX//03v+vOvr03be2v6jyjLDXLAI2IFJNPrCJIBopomNTU5O6NZWyawHdKLT3kwG2EQBDl2gUICHIV6XuKCYOnyOFCbzozRkri4HEVq/oKLx9jM01VhrBkyRw3vkfnGVxC0OU5BERo+HKRR2lsi4i9HAJw1s8JWVDV0uDg9sDzrLmSzaABOBYPpibEBp8dOqCA8IL7A0QEwdRx89i+gMDXIGhbBzvBdeCp8HfFGVkW2RUnAwjIYgpkZwhcIsTiRiMA0cdBj3KpDCN1UPLqRf6hEao5aiE0tYbI1amajVJlkKysS2Zg4qGSxAEjoyHtZiACCTSX8IsyHUSbiT0OKvgPIEBZYIXzEKHkWguRUZoidMjkCkalQapYkItKAuMwdImKpBTULq1DI1omTdGc0dWWClOwyknjhQ/051OWY7/55qmZPvsuzXNYNPaVKaZZkYSpBtOx1WWXr2dvLXuOILtymqo3iDtui1Mn5uiGquW/qIk+A6sA+JTm1nxtzafCIJFtSVLzYjO8YRzSw0GXiIGHGzny9JJnaqVDkLO0RjZHQhrKU6Nd8PBEr8HZYly4FPF+UBwlcpBYoOQ6xgZ3KUb1US4QNSV1k4MC1Mc1QXBmtyyTbfJA4yR3UezkwPfT1MGzZPg+mh+nUMqMHxc1pJD/RCg1T6Z08vp0Cd9jppitVCp82SGvgbHkUHr2Hh9whqoTzRW4GMoIsKwFE9qh0c4kgswCDqMiieVpvvq9ychGhfHqVXGPkSt1Z4+5FTM+gqHkGMqbTSNi5KfXpCGhMA4zj1lm3JxHekIS0tFpyulVqNIuGdWgWPLgQZf8Bz9abD/5IDWCAEB+BOIeW0cph75XGkiIv0Rcty62R7P0xcAKIAAnp5goz7lODJMBdSgKOvLs1KGABXGfiICcNmrTrNmHeZiwpHo9Q2ti25gdMWYwFow0l4KqcbE09k7oxL6VFtQIvDeo1yrbVLNlViuhz4cLWRmqjyI5CHGS9qW/fXpUkR/mYBJURHu7YSSSRKVTa8QQbTBabw+XJyMrJKygqKauoqqlraGpp6+jq6RsYGhmbgOAkxKWupbrg1QBPnMguZVTZkmtTInopXPv+ol06OcjKDf19VdIxH6znAZEfRitKpzqUaUG5alQoACo1oSo2dP0+aUSbbKBdKbo1Y0AyMKgWQ1KAYZnAiBxgVA3GFALjioEJecCUEkwrAmaUYVY6MCcVmFeBRVnAklxgWQawIg1YVY41VViXBGyoxCZ980GMYcVCHIQgHsKQAImQBMmQAqmQBumQAZmQBdmQA7mQB2WgLJSD8lABKkIlqAxVoCpUg+pQA2pCLagNdaAu1IP60AAaQiNoDE2M+81fjgCvgLPtXKgRL1iu7xJFjCf1WQiDKBQqCItfAigCHV9IuJGEiCMkjjIiLlBi5VkbZ2JCb7Rv3NbYbjSEyjiChEOSTFx8I92wh8N5vKxOlyWZq7ErHVnMcgSiKJrjEU2SDZPs5jAtTJJ5ESimB2f3I29+IY9xJuq6ug/LRdmUZJQCZVa9LKKUcc3IeYbsxTKAaYpDYfUuXhM1coGn4HDNQJHssUaDUVAkrHBBW+Gax+GSRZ/nbc3Zt6ffVlNvTr2bvxxBGce61QIi3C9vfNDvromrb9X760qEvJnZMaQ+BPeKVkvHsYwiFYawD+h9ofcYLTAm4X4fqWFuEQBUewjaxDfcS+S8oIwIQZxZ1iyCTvVUPoR9usMjbCM9shnM3JOZfyJPySheSAKjDSXkk32GUjzCI5zUT2BCPt5qJJIFdnU4kaRX1AeTCePcZmIoJ9nE6RZ27jgTP4B6JEcEvoaJvE+y5+t5oR8Xis/WOajny5L4jBrhS4cj1ZRdGDN/DGiLEtc11AjGA90QJsGBlzpC1BOmW+hZhgE9ODqRJGSMJXUDtIk6012yqeqigZmo3zaVqBvkck8nKC+wF1NiWDIChuViHW+gDT0mkBdlyQWdIwgQlNAhOCWmtc5yOLWcDQ6eG4chg4hwBBgCEwuI/RUhpMIcQeruVQD6AAMgaABx7d4DED/cQKjn+vv9shNj3Q4oOtd1JVP5y44bka/liynTt8t283OUd6spkW4suzUN65F39nvD79Fypsy/0I4RqGa6RSAOuHmznovnBNkASt/2EawdxG0V5oDbxxIwDlRQTgAMuA0DPyUnuGsSt2UFx4sDoW1zYZrFS1MMmIRs2weGZ9WQ8n03HCjtQuh6FnR96BwcxF4sbHmelQPCAhHrS8n2fY2IzwSi5cUiAPocpnlyYpwPk/OsZKC0O5D6Kr7pH/BvJiWkmKDJgxDDg4dKmFE3FyrqqrlG+soVng4gT/lIFQFAEIMK1hwfIE7T8yJDe1bqJokDxIUrOLbhCYYUrwMy6DZeC0ToSzco8rB2LLemSdYNMELeZz9mYT6ai0AveLRJqw2Kk23Gjmc7xsmYO+NEB5vtSE0ZlRODxNCOI+zgIX7CNYu5kJbSlWwlztY1qt6irnugmqrmQsIm3FTR7M6LtWFEGOF57x0ZG9RnDnNrNdXRpOGjV2UrA3m2LCf4tQFKqz4Wua7tO5XKlUbeFaxI7VmlNEiRpiNapYcEzuGwntM5xrH/iuKBf0+oOBAbtN8GxyIQ9tOqYd6kgdBVsXNM5jN7g8cM/pX5zCLkst/vfn9cCIxZtFcqeEK9vSqujWvMa2yynB9jnoy5cqNhnwpSb/NjxzffExnHWL8b1fUBv7C5x3bPrTbqGzdu/j768fiZLjPFeLqQ5QhQAieqlx/yQ751wuG+9rE8PTJ6f68ePfe0cQaKyKjnyQH6gs6Qyb4CZK3r4WWThIZ8S+ATwnzXJIQVKX2Sds4hF0S3Wetv4F2Tn+hHe8tTAvQQ197hJGs81p8MOgBtsw60S9oPBFt4Pxus4F0gHG47ApiBJIQGSDI9sjFKuP1cBeQUYaiiCD5BYa9bE+GeBaMhju545Y/lE1zQ34B4OCwkPSPW8RjKH/qbyDfeYR0P9cvnIX+23B/GNF+HOAt7AeGinsrfwYPOsp6g3aKlf/IH6y9HH27+d8bdYCuGl9fsF57VQacOkC4YNNMV1rRxQsOhC6L4GXgk+DvD/A5vXkXNJMV0ybIONfQOwNkB0cBYd0GI9vSbCc/WgRzYDvg+VS5ggE7DsY4ABAndyE7xTWQnRDfh3d5Ab3hkZf+EWit5/zaYHG+Db6TfG9cfv1dvH14ForUM2ArZNnMInP14/PPXU2lh9zlH42vmVucjOp0dkx7xiL+e0g4v2U6p+WM/frmHyaGD9ISaeXdufeyDGXdmxUu2PRjzZMIV+HFli5zoaCmU0HiSBmWG9C/QPeEga2T0w5n1YZUxVxaMvjv3YThojwrDmbiqJV7CLbU7DxY8mSC1ljKKkvmXURAp6nkmcZGyWX0YES5CyrfZ7dGX2Md+GWWZZb7v8ABri3aN5EGAsfYAvTUKsOfojS4RaQ/g48ns5ojpDJGptfxMNpbmiiLdn4zjsxrDp1HMZ3SOmUMnsIEVVprojxsfMRGP9BP5WD08QFzTVbZvv2Wf1CnEA9lUJqGe5emRgbQZfvW96MJeCiiHHOAEIoxvIwxSfg5BucCOXJhy6hCgtkM1AJQpnQB+vCwNIxJj7Hn3lAdRQS4qNPTFtTcX3/Bpr7OCH4fV3ipZlMXtPX4YNCUA8l88ba3jufdeNOyyAN656Jc91KCTCsZDkCYe+b5Kh4/RLzclMMnfPykgeXtAin9i0scesI3A4F6HgJTtAcn+SUn+KYHD3+cuiz1libCcil2WO9szPSA+bsSIuFkEtMcH7NJF3T7frDrrt9hsegCNpUasqm8wNtQbwOG/asFYGIttluZi4NRL9cuYcS3hcw20T27eTEnuDQD+fc8VjntdHWXV1KsWryWyLPm6qNLIyNLoRJtrNW9+x4AdO1Yaur4V3LsxkD1rHa4MZwyFzP6grmLVqqYH9x88aARD+qZN+7B375y5/4Hv+vuS0jL2ftIkgL3VOiOdbRFtvbDzLj0P4+0F3sDS3h8T97K+TQ9kS1onD+vVFtHuzIoorJLdrW8v9u5q44MHDx8MhZCHQ+GdVA8fgi3jD2xCu35pgy/Ne2xKa2CgVWk7IODNWwNtygOMJ3KDJdLstkRsSJboUr/qJG256ddUia6N0g/ucMi8NcI1jszr2FDhUOyyw9EuDBZ2beNQ2zXHLpPlBg/uYjztuY7CgLpDdNwFqk98lVeTl2nq1NeRpba9xO48aTY300301wETMDB/DqtLRtpcy6xTMNcW7JGldl3WM3dq2VoWEFVd3OgFkSnOjZsaKrgGc2VovjYvL6Qg7FF+iMEFW6quCgXc51J/ddx4/8iNGzERdk6mCdpj97XITCaZxbdTwFlyk9zSCVFuZhg5I79uMrOvZbzTJUwa4HAYHGbLgOQqsyPewU4qHinC41EdgTBYjp+WPn2uI4EwEIQcadrJxWPjYpSLlJaYsZTiNq8/m3KpW1OHmPYnjNvluemP1yNPKiy25/Wh/s6hKtza3WKo5Jx3YPnNgiYc9GuNZ3oaFXCk5zorucES3RoP2ve8gblHMyP7F4zgd9elRQ8iD08nOeaeWfTjVJQKQveVlJJQhrrZc0ZVvc29/HdBHwox33QGA6rnre/ke9nn2BHnU9X3zflxm77t1WPlmwH57ffwPu6Vg8IDiCEhBHhxRYkKPJEAM/S9iAgdjZKzK0LNZnXJbJxeLxAJgWNoKw7RaTAcjCMFI9C5CBjFBFqNBUAYJJWamUFqlA8HYWycmPhT6sNFQ/x2EwZLle7KEKZQg+pgVTAE4WA8iRBbEQKJMRTDw6jAoA2W5MbkegEifoyXbEjq0NR+MiQnKPqLmPZMY+K+MscQ7+FH5sNORqO4VdIqbvxMfoDtZSbXj1wgNxuI5FmYJ9fGxdIxUqIvZzSHon1GRIdKh6DEZ1oa+Sy2l7GvbkuOioHFcmLdGe7eHG8Hx8ahSV8Q3RFmANefPJneSRmGD+AcsL8ZO53750aiSKFXlAKjTT6fKacyh0obxEMYpcROEqoEsk/+ZUfKmqx8608L/zw/LDl0d3dychioDwudVB9bn1QfU9/fTHN6l5rrIX3bUuzXog5XFHz8IiockT/scIH5vwFvNg4fc7uObnAzBqcfa7vAsCgxoDiZLBKhxWlNMBtLoKQxTbsOJTdPHGsqv3TPnZxsbqndsvVYvf/j9dA7AW+5JMOjST8oPkrHg3CeTkomAiJuGNNs23ee69qAGwzBhYJ0TvFFw4ZHr107rh6qLqyzN1YUkSgIMSORyqJDUdKEkgkEHnagqSPiK20dZGtox1bcn9xw8/E4oavEbtIOiIrwUHMZ7ODV83ziY6cOnDp/pbpoadqswi2nKvMWTB817hQjwWciuQVG+9brmQZm/PhK3aCYmEG6SljA4IJtQZIMXN/f8SD7kc3bOtYAIABedvl4Ho7s2jxj193nZ848v9u5aHNH5GFPbw8CsvkwQrhcrlFl2FUa/rW5E68JNBmqH01NYCSBd+Tt25/dj3+Oe4uc8M7V7uO5ObJDPVuv/WUM4aX4B2qUagcBX8ukeZLsKVOyJXnScwIGd8uSbGneOY724rN5fXtGbbu5vX9+vONoglXjaSL6FZqGBuhd9wpdRG+QqTQNHbA3nEoX0d5563GpEB4hJ5WhCDxpKIyHacalKNI8vYwgKIYLYPehjigBG8kmiLOpKqwBeSk3DHhcq2MJf1s11t9ClrDHGPf18o7p9gn16Y72bnts2o41MUIZTdjm3fM1z7ze4NMd4/2Ku4CiXsTeROAdnFCg9tU1UMKmsWbhfNZMH6kJl4zPI3r1h4k4+ujkWAzPTyXw8xgEHKMywyaQpmcuD11+s3y5+3IgXe6NDg+rSLlcKbKC7CJlqkKRWhDAgvPgUQHV+ODUYtSSW6PzMfCTspP84/39MiRpE0g4PG//7CQDX+eTW4Na9vDXxqzlg9BBhdQg9h77zH2UJPkQAc/j2VhvsSHJYBmmbRNo02KWnHnAEBuSDfFrNq4HphW0aYdZDJ0votuiqT3nC9x6aPcGzVv4AbuO3V9QMeObWGjPDd5kyrULTacCSgn8IqQAcR+SUX3V+Fl4kVfmgD4pGPvC/3gc11LpVSj2s+C5ebYI1kH0JF0Iygrf9vk/PBEaVg5gdAIPRuDZWyEGUMyA3P57yY8mrps6lb6VvmDquM2HcYyFwqK+IKj479/FNUM2aBrNCDwuMeR/feAPm1lulMmMcrMtPtA08m9hHr4OQxf+HRloirfhUDKjUWaWA/WbMpfVdS8lDb14sZzXBem2MpuN4GHbFu3USTukaCZqTSPJwxV2oV4vtCtiYwZazWgZ2hHYzdY1dKxCaNfr7XnQi+me+gytz7CuxpjGrmE+Wsx3z/QSHZx5J6FoXFHCxzuCoIiwwqJwl4BfyIggwR2w6mXP5YxfMpQkC7jaXmKtvoPl3guFiMGU50ccTjDP2EFWN7OW4Lhbx+cFyXX15JB6JhXns3iqS+1Luz+EIK1BqhFscqFJwFGVEP1KqJvEHTYwWyhlTPiCpr7moiRJrzMz7dGkS2jmRRlECPp1Z2dJX/DlSx/nEBX2d68AcM5JZi/D9kAkWGPi6eKm3ULXYv486aSfsji1Ud2EYkMKwjNUkZmaBF7G0KFZvePVjkiVLdQ5GGZgi29wewLJ+XNebLIhBrnJl2dg2O2XCjlupjLhoRBEWiQC37uVaQpdD2VoVBaCJlD7EHWcOL9quCFFtPC80spO5KYWKRVpaYqbqp6c4paQAkb/zPX7VdcXqL58RVnWaGNASOK4BCqiypP8eEsvInYSW4htBHoR7XqehI+jJiSOCwkwhoPFF+shUBtKaOtFJ1FvojvNKzEhfF2msFfa8LFuecG0vKoB1b12kQUJ4YkMlJngmRZk8auMzanhqRcmhCVi5xe9q/HITOnvcWzpB6Wu2WdvDLkdYN+zkyfLanQsXU1Zl7TL6XzObJe2M98UO7ukDmnXso7nTnCdPClCwkfMG23Ja+BT7t10fUbK9V+N2W5kkX6P92r+MqnK9dFbCoX6VD+YneqRJ47cGn9OItbyDxvvCfLecd5ziOy2RH3tbCKgDq3mmoIwZ0iIM6zgsYCx80Pa5B8zr1lHdYY9I2Pxb/tvgOucMvaNyz3OzWwp3tF5iZkoYEAKXqRYgxYXzEAIoiSKnRV/5nDflnkz46Zffod6pJSunnjk6PHmAHgR+K8OX64tWbI6ozw+2saDCbQCcjIdYUZITATb8Z33ui7iWwGz/3Xwi1PJJfPFR39aBqWjzw5V19bZWyvryFQcKTOFxqYzorg5gycQeqkftM+P+DaiH+RoXMfYcb+j5dWj8ZpJJXazeUBKRG8Nj8nR7m4VJNmmjZg2f4e6aHPBrJqtN8dWrJ8xavYbRopgMmURxHDuNLEs7KSyV5zSZX35Dp+MuRawqRt0eK/r5aipBKriEPbfqogB8dtxrxADZ4ffRVLgg2nQJngEPQuihRrwe4TuhCfyaAaSDtwaqCUyHeGnwsfheOAOI530CkIALgGpd94FNmIRvKrZRFMwG9nRE6e7kUcQPxv+jtH/FdcBL6eeyHHgFsHX5W64pucf0JtIBO1aCIdxfGQp9IC8rA7vQO54LiBzbVWHviK3LYIyAbcRvsoVIeXcGWhP5GjEOxU+iagiSzNNWKOwWXg0/1+qPHBuyjJavnvUNxK2WwDKJT85MG5nwsmLZ5MADMDIjE9+2XMcj/NH+0tRjG05FsnMcHY0lWtE5gZ5oYZ32Rsl7IA/255jFRf8HmYHfYXR2+CLfg6b0hAAwBZIAR1kGABAIYkA9CzjUSf8Hg8BojABv/hZiScWCaSzuEB2QzygAs+GBEAEsoYU4E9xbCpgyoEACEcGEKCD8oCFA0ewSGATiwtsaYgHHCsaEgAd7GlIAZlOnQkVSAPvoa4BxVWVdeml/QaXF9aOzdt9ZZbW1g2oquQHKVTMk4grrSytLXSVlvCLhvPrhvRTu1xl/LLaqgq+parSVVpeXsWvrq0aWFrsUvR3uaojlMoy3ienKK6qAEO5DFCsSqU66Ur1M1i5QrX80VDqTKVq1UVotG18QRRUxWwcqRRpupBLqRKpyPCseJ0h+lFzEakMPyldq0oFPosaEsTlEa5akGq+PFCp4ogq9Fcg1f/XAzW5MlGisGyt6JIENIwxbo5sayMjpNLGsv+aKXZcz/cr5S/Vdlwvk83lC8VSuVKt1RvNVrvT7fUHw9F4Mp0RPwij+I8m6XyxXK03RsYmpmbmFpZW1ja2dvYOjk7OcSovboOhLLtFgyeKM3j1D1NkssDTB6bz/AB/VzLVJWZaF4/lfNCaHB/3K6d8XpJoHyuvr4pJzOT6BeZh0WIBfseMKEUF4sn4uxm11iCmIni08pLkojaiEA3q0JmTHVFJLvttrbQF9RiLkEP+yFZ1RWRSzOkVTI1+oG3mDNzGMRjBSFnjWy5LDnRF7nWGBBVB3qUnyLo2RbcQqxDXd/mnQEzpKrXVedC6i5q2a6vki4YsnnhpSn+8Unt7CVKCRyEVsJyKgyIunDVU4tFrFnD4G6jly5AMc5h9Wew0+JIvImWkL/pjMd97iT6yqJguhFeLv9S5JNE0HoOCgoFxILIm/cVwVmAQAZ0BT/k3JWkvbxexD+cnMRF5Gtma25t5GAcAAA==")
          format("woff2");
      }

      .wticons {
        line-height: 1;
      }

      .wticons:before {
        font-family: wticons !important;
        font-style: normal;
        font-weight: normal !important;
        vertical-align: top;
      }

      .wticon-account:before {
        content: "\f101";
      }
      .wticon-add:before {
        content: "\f102";
      }
      .wticon-cardResizeDrag:before {
        content: "\f103";
      }
      .wticon-casual:before {
        content: "\f104";
      }
      .wticon-check:before {
        content: "\f105";
      }
      .wticon-checkSmall:before {
        content: "\f106";
      }
      .wticon-chevron:before {
        content: "\f107";
      }
      .wticon-copy:before {
        content: "\f108";
      }
      .wticon-copySmall:before {
        content: "\f109";
      }
      .wticon-dismiss:before {
        content: "\f10a";
      }
      .wticon-downChevron:before {
        content: "\f10b";
      }
      .wticon-error:before {
        content: "\f10c";
      }
      .wticon-expand:before {
        content: "\f10d";
      }
      .wticon-feedback:before {
        content: "\f10e";
      }
      .wticon-filledDownArrow:before {
        content: "\f10f";
      }
      .wticon-find:before {
        content: "\f110";
      }
      .wticon-formal:before {
        content: "\f111";
      }
      .wticon-gift:before {
        content: "\f112";
      }
      .wticon-grayLogo:before {
        content: "\f113";
      }
      .wticon-ignore:before {
        content: "\f114";
      }
      .wticon-info:before {
        content: "\f115";
      }
      .wticon-leftChevron:before {
        content: "\f116";
      }
      .wticon-logo:before {
        content: "\f117";
      }
      .wticon-love:before {
        content: "\f118";
      }
      .wticon-noRecommendations:before {
        content: "\f119";
      }
      .wticon-paragraphRewrite:before {
        content: "\f11a";
      }
      .wticon-paste:before {
        content: "\f11b";
      }
      .wticon-pin:before {
        content: "\f11c";
      }
      .wticon-premium:before {
        content: "\f11d";
      }
      .wticon-premiumDetail:before {
        content: "\f11e";
      }
      .wticon-premiumFull:before {
        content: "\f11f";
      }
      .wticon-recommendationLight:before {
        content: "\f120";
      }
      .wticon-recommendationLightCard:before {
        content: "\f121";
      }
      .wticon-recommendationLightNoSuggestions:before {
        content: "\f122";
      }
      .wticon-refine:before {
        content: "\f123";
      }
      .wticon-rewrite:before {
        content: "\f124";
      }
      .wticon-rightChevron:before {
        content: "\f125";
      }
      .wticon-rocket:before {
        content: "\f126";
      }
      .wticon-sentenceExamples:before {
        content: "\f127";
      }
      .wticon-settings:before {
        content: "\f128";
      }
      .wticon-shorten:before {
        content: "\f129";
      }
      .wticon-tutorial:before {
        content: "\f12a";
      }
      .wticon-unlock:before {
        content: "\f12b";
      }
      .wticon-warn:before {
        content: "\f12c";
      }
      .wticon-WordtuneButton:before {
        content: "\f12d";
      }
      .wticon-x:before {
        content: "\f12e";
      }

      /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy9zaGFyZWQvSWNvbnMuZm9udC5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtDQUNDLHNCQUFzQjtDQUN0QixtQkFBbUI7Q0FDbkIseTdSQUF5N1I7QUFDMTdSOztBQUVBO0NBQ0MsY0FBYztBQUNmOztBQUVBO0NBQ0MsK0JBQStCO0NBQy9CLGtCQUFrQjtDQUNsQiw4QkFBOEI7Q0FDOUIsbUJBQW1CO0FBQ3BCOztBQUVBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCIiwic291cmNlc0NvbnRlbnQiOlsiQGZvbnQtZmFjZSB7XG5cdGZvbnQtZmFtaWx5OiBcInd0aWNvbnNcIjtcblx0Zm9udC1kaXNwbGF5OiBibG9jaztcblx0c3JjOiB1cmwoXCJkYXRhOmZvbnQvd29mZjI7Y2hhcnNldD11dGYtODtiYXNlNjQsZDA5R01nQUJBQUFBQUJxWUFBc0FBQUFBTXhBQUFCcEdBQUVBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUhJa1lCbUFBakJBS3dBaTBaUUUyQWlRRGdrUUxnU1FBQkNBRmhBb0hoVkliQml3emtuVmFFNHlLK2lnMmxhSW9GWk11KzY4VHVDa2laa1g5aFFnYVprS0YxUFJ3YUYxS2VudnZuMTFjV0N3NGNCSHRGRVJ2N3o3M0M4TXFqeHlTRkNZUFBHdnF2MHNHaExwRXJJQkJieXhjNVl3aVlWQ09oY3Z6WFE3ZDdJQVF6Q3Zpd1Q1UUVSbTIrWWRvbS9mLzBJTC85SnhCbEFVSVlpUnRveWhZYzJpdnRGbUdzUXB6VmM1RnQ2c0tDYmFjTjB5amxQUXVDVUlRZ2h1TThWS29lZCtwU2MyT0pHZG9DQTA0STJEQkFPaVA4aVBkcC9UdXp4QTZUdHNrN1lEWnNhK1p5eEJDKzFWcnpqWENIakp5d0N5THB4OEI4ejluMnVTT0ZXVkFMQlNSUlNYLy8wM3Yrdk92cjAzYmUydjZqeWpMRFhMQUkySUZKTlByQ0pJQm9wb21OVFU1TzZOWld5YXdIZEtMVDNrd0cyRVFCRGwyZ1VJQ0hJVjZYdUtDWU9ueU9GQ2J6b3pSa3JpNEhFVnEvb0tMeDlqTTAxVmhyQmt5UnczdmtmbkdWeEMwT1U1QkVSbytIS1JSMmxzaTRpOUhBSncxczhKV1ZEVjB1RGc5c0R6ckxtU3phQUJPQllQcGliRUJwOGRPcUNBOElMN0EwUUV3ZFJ4ODlpK2dNRFhJR2hiQnp2QmRlQ3A4SGZGR1ZrVzJSVW5Bd2pJWWdwa1p3aGNJc1RpUmlNQTBjZEJqM0twRENOMVVQTHFSZjZoRWFvNWFpRTB0WWJJMWFtYWpWSmxrS3lzUzJaZzRxR1N4QUVqb3lIdFppQUNDVFNYOElzeUhVU2JpVDBPS3ZnUElFQlpZSVh6RUtIa1dndVJVWm9pZE1qa0NrYWxRYXBZa0l0S0F1TXdkSW1LcEJUVUxxMURJMW9tVGRHYzBkV1dDbE93eWtuamhRLzA1MU9XWTcvNTVxbVpQdnN1elhOWU5QYVZLYVpaa1lTcEJ0T3gxV1dYcjJkdkxYdU9JTHR5bXFvM2lEdHVpMU1uNXVpR3F1Vy9xSWsrQTZzQStKVG0xbnh0emFmQ0lKRnRTVkx6WWpPOFlSelN3MEdYaUlHSEd6bnk5SkpuYXFWRGtMTzBSalpIUWhyS1U2TmQ4UEJFcjhIWllseTRGUEYrVUJ3bGNwQllvT1E2eGdaM0tVYjFVUzRRTlNWMWs0TUMxTWMxUVhCbXR5eVRiZkpBNHlSM1Vlemt3UGZUMU1HelpQZyttaCtuVU1xTUh4YzFwSkQvUkNnMVQ2WjA4dnAwQ2Q5anBwaXRWQ3A4MlNHdmdiSGtVSHIySGg5d2hxb1R6Ulc0R01vSXNLd0ZFOXFoMGM0a2dzd0NEcU1paWVWcHZ2cTl5Y2hHaGZIcVZYR1BrU3QxWjQrNUZUTStncUhrR01xYlRTTmk1S2ZYcENHaE1BNHpqMWxtM0p4SGVrSVMwdEZweXVsVnFOSXVHZFdnV1BMZ1FaZjhCejlhYkQvNUlEV0NBRUIrQk9JZVcwY3BoNzVYR2tpSXYwUmN0eTYyUjdQMHhjQUtJQUFucDVnb3o3bE9ESk1CZFNnS092THMxS0dBQlhHZmlJQ2NObXJUck5tSGVaaXdwSG85UTJ0aTI1Z2RNV1l3Rm93MGw0S3FjYkUwOWs3b3hMNlZGdFFJdkRlbzF5cmJWTE5sVml1aHo0Y0xXUm1xanlJNUNIR1M5cVcvZlhwVWtSL21ZQkpVUkh1N1lTU1NSS1ZUYThRUWJUQmFidytYSnlNckpLeWdxS2F1b3FxbHJhR3BwNitqcTZSc1lHaG1iZ09Ba3hLV3VwYnJnMVFCUG5NZ3VaVlRaa210VElub3BYUHYrb2wwNk9jaktEZjE5VmRJeEg2em5BWkVmUml0S3B6cVVhVUc1YWxRb0FDbzFvU28yZFAwK2FVU2JiS0JkS2JvMVkwQXlNS2dXUTFLQVlabkFpQnhnVkEzR0ZBTGppb0VKZWNDVUVrd3JBbWFVWVZZNk1DY1ZtRmVCUlZuQWtseGdXUWF3SWcxWVZZNDFWVmlYQkd5b3hDWjk4MEdNWWNWQ0hJUWdIc0tRQUltUUJNbVFBcW1RQnVtUUFabVFCZG1RQTdtUUIyV2dMSlNEOGxBQktrSWxxQXhWb0NwVWcrcFFBMnBDTGFnTmRhQXUxSVA2MEFBYVFpTm9ERTJNKzgxZmpnQ3ZnTFB0WEtnUkwxaXU3eEpGakNmMVdRaURLQlFxQ0l0ZkFpZ0NIVjlJdUpHRWlDTWtqaklpTGxCaTVWa2JaMkpDYjdSdjNOYllialNFeWppQ2hFT1NURng4STkyd2g4TjV2S3hPbHlXWnE3RXJIVm5NY2dTaUtKcmpFVTJTRFpQczVqQXRUSko1RVNpbUIyZjNJMjkrSVk5eEp1cTZ1Zy9MUmRtVVpKUUNaVmE5TEtLVWNjM0llWWJzeFRLQWFZcERZZlV1WGhNMWNvR240SEROUUpIc3NVYURVVkFrckhCQlcrR2F4K0dTUlovbmJjM1p0NmZmVmxOdlRyMmJ2eHhCR2NlNjFRSWkzQzl2Zk5EdnJvbXJiOVg3NjBxRXZKblpNYVErQlBlS1ZrdkhzWXdpRllhd0QraDlvZmNZTFRBbTRYNGZxV0Z1RVFCVWV3amF4RGZjUytTOG9Jd0lRWnhaMWl5Q1R2VlVQb1I5dXNNamJDTTlzaG5NM0pPWmZ5SlB5U2hlU0FLakRTWGtrMzJHVWp6Q0k1elVUMkJDUHQ1cUpKSUZkblU0a2FSWDFBZVRDZVBjWm1Jb0o5bkU2UloyN2pnVFA0QjZKRWNFdm9hSnZFK3k1K3Q1b1I4WGlzL1dPYWpueTVMNGpCcmhTNGNqMVpSZEdETi9ER2lMRXRjMTFBakdBOTBRSnNHQmx6cEMxQk9tVytoWmhnRTlPRHFSSkdTTUpYVUR0SWs2MDEyeXFlcWlnWm1vM3phVnFCdmtjazhuS0Mrd0YxTmlXRElDaHVWaUhXK2dEVDBta0JkbHlRV2RJd2dRbE5BaE9DV210YzV5T0xXY0RRNmVHNGNoZzRod0JCZ0NFd3VJL1JVaHBNSWNRZXJ1VlFENkFBTWdhQUJ4N2Q0REVEL2NRS2puK3Z2OXNoTmozUTRvT3RkMUpWUDV5NDRia2EvbGl5blR0OHQyODNPVWQ2c3BrVzRzdXpVTjY1RjM5bnZENzlGeXBzeS8wSTRScUdhNlJTQU91SG16bm92bkJOa0FTdC8yRWF3ZHhHMFY1b0RieHhJd0RsUlFUZ0FNdUEwRFB5VW51R3NTdDJVRng0c0RvVzF6WVpyRlMxTU1tSVJzMndlR1o5V1E4bjAzSENqdFF1aDZGblI5NkJ3Y3hGNHNiSG1lbFFQQ0FoSHJTOG4yZlkySXp3U2k1Y1VpQVBvY3BubHlZcHdQay9Pc1pLQzBPNUQ2S3I3cEgvQnZKaVdrbUtESmd4RERnNGRLbUZFM0Z5cnFxcmxHK3NvVm5nNGdUL2xJRlFGQUVJTUsxaHdmSUU3VDh5SkRlMWJxSm9rRHhJVXJPTGJoQ1lZVXJ3TXk2RFplQzBUb1N6Y284ckIyTExlbVNkWU5NRUxlWno5bVlUNmFpMEF2ZUxSSnF3MktrMjNHam1jN3hzbVlPK05FQjV2dFNFMFpsUk9EeE5DT0kremdJWDdDTll1NWtKYlNsV3dsenRZMXF0NmlybnVnbXFybVFzSW0zRlRSN002THRXRkVHT0Y1N3gwWkc5Um5Ebk5yTmRYUnBPR2pWMlVyQTNtMkxDZjR0UUZLcXo0V3VhN3RPNVhLbFViZUZheEk3Vm1sTkVpUnBpTmFwWWNFenVHd250TTV4ckgvaXVLQmYwK29PQkFidE44R3h5SVE5dE9xWWQ2a2dkQlZzWE5NNWpON2c4Y00vcFg1ekNMa3N0L3ZmbjljQ0l4WnRGY3FlRUs5dlNxdWpXdk1hMnl5bkI5am5veTVjcU5obndwU2IvTmp4emZmRXhuSFdMOGIxZlVCdjdDNXgzYlByVGJxR3pkdS9qNzY4ZmlaTGpQRmVMcVE1UWhRQWllcWx4L3lRNzUxd3VHKzlyRThQVEo2ZjY4ZVBmZTBjUWFLeUtqbnlRSDZnczZReWI0Q1pLM3I0V1dUaElaOFMrQVR3bnpYSklRVktYMlNkczRoRjBTM1dldHY0RjJUbitoSGU4dFRBdlFRMTk3aEpHczgxcDhNT2dCdHN3NjBTOW9QQkZ0NFB4dXM0RjBnSEc0N0FwaUJKSVFHU0RJOXNqRkt1UDFjQmVRVVlhaWlDRDVCWWE5YkUrR2VCYU1oanU1NDVZL2xFMXpRMzRCNE9Dd2tQU1BXOFJqS0gvcWJ5RGZlWVIwUDljdm5JWCsyM0IvR05GK0hPQXQ3QWVHaW5zcmZ3WVBPc3A2ZzNhS2xmL0lINnk5SEgyNytkOGJkWUN1R2w5ZnNGNTdWUWFjT2tDNFlOTk1WMXJSeFFzT2hDNkw0R1hnaytEdkQvQTV2WGtYTkpNVjB5YklPTmZRT3dOa0IwY0JZZDBHSTl2U2JDYy9XZ1J6WUR2ZytWUzVnZ0U3RHNZNEFCQW5keUU3eFRXUW5SRGZoM2Q1QWIzaGtaZitFV2l0NS96YVlIRytEYjZUZkc5Y2Z2MWR2SDE0Rm9yVU0yQXJaTm5NSW5QMTQvUFBYVTJsaDl6bEg0MnZtVnVjak9wMGRreDd4aUwrZTBnNHYyVTZwK1dNL2ZybUh5YUdEOUlTYWVYZHVmZXlER1hkbXhVdTJQUmp6Wk1JVitIRmxpNXpvYUNtVTBIaVNCbVdHOUMvUVBlRWdhMlQwdzVuMVlaVXhWeGFNdmp2M1lUaG9qd3JEbWJpcUpWN0NMYlU3RHhZOG1TQzFsaktLa3ZtWFVSQXA2bmttY1pHeVdYMFlFUzVDeXJmWjdkR1gyTWQrR1dXWlpiN3Y4QUJyaTNhTjVFR0FzZllBdlRVS3NPZm9qUzRSYVEvZzQ4bnM1b2pwREpHcHRmeE1OcGJtaWlMZG40empzeHJEcDFITVozU09tVU1uc0lFVlZwcm9qeHNmTVJHUDlCUDVXRDA4UUZ6VFZiWnZ2MldmMUNuRUE5bFVKcUdlNWVtUmdiUVpmdlc5Nk1KZUNpaUhIT0FFSW94dkl3eFNmZzVCdWNDT1hKaHk2aENndGtNMUFKUXBuUUIrdkN3Tkl4Smo3SG4zbEFkUlFTNHFOUFRGdFRjWDMvQnByN09DSDRmVjNpcFpsTVh0UFg0WU5DVUE4bDg4YmEzanVmZGVOT3l5QU42NTZKYzkxS0NUQ3NaRGtDWWUrYjVLaDQvUkx6Y2xNTW5mUHlrZ2VYdEFpbjlpMHNjZXNJM0E0RjZIZ0pUdEFjbitTVW4rS1lIRDMrY3VpejFsaWJDY2lsMldPOXN6UFNBK2JzU0l1RmtFdE1jSDdOSkYzVDdmckRycnQ5aHNlZ0NOcFVhc3FtOHdOdFFid09HL2FzRllHSXR0bHVaaTROUkw5Y3VZY1MzaGN3MjBUMjdlVEVudURRRCtmYzhWam50ZEhXWFYxS3NXcnlXeUxQbTZxTkxJeU5Mb1JKdHJOVzkreDRBZE8xWWF1cjRWM0xzeGtEMXJIYTRNWnd5RnpQNmdybUxWcXFZSDl4ODhhQVJEK3FaTis3QjM3NXk1LzRIdit2dVMwakwyZnRJa2dMM1ZPaU9kYlJGdHZiRHpMajBQNCswRjNzRFMzaDhUOTdLK1RROWtTMW9uRCt2VkZ0SHV6SW9vckpMZHJXOHY5dTVxNDRNSER4OE1oWkNIUStHZFZBOGZnaTNqRDJ4Q3UzNXBneS9OZTJ4S2EyQ2dWV2s3SU9ETld3TnR5Z09NSjNLREpkTHN0a1JzU0pib1VyL3FKRzI1NmRkVWlhNk4wZy91Y01pOE5jSTFqc3pyMkZEaFVPeXl3OUV1REJaMmJlTlEyelhITHBQbEJnL3VZanp0dVk3Q2dMcERkTndGcWs5OGxWZVRsMm5xMU5lUnBiYTl4TzQ4YVRZMzAwMzAxd0VUTURCL0RxdExSdHBjeTZ4VE1OY1c3SkdsZGwzV00zZHEyVm9XRUZWZDNPZ0ZrU25PalpzYUtyZ0djMlZvdmpZdkw2UWc3RkYraU1FRlc2cXVDZ1hjNTFKL2RkeDQvOGlOR3pFUmRrNm1DZHBqOTdYSVRDYVp4YmRUd0ZseWs5elNDVkZ1WmhnNUk3OXVNck92WmJ6VEpVd2E0SEFZSEdiTGdPUXFzeVBld1U0cUhpbkM0MUVkZ1RCWWpwK1dQbjJ1STRFd0VJUWNhZHJKeFdQallwU0xsSmFZc1pUaU5xOC9tM0twVzFPSG1QWW5qTnZsdWVtUDF5TlBLaXkyNS9XaC9zNmhLdHphM1dLbzVKeDNZUG5OZ2lZYzlHdU5aM29hRlhDazV6b3J1Y0VTM1JvUDJ2ZThnYmxITXlQN0Y0emdkOWVsUlE4aUQwOG5PZWFlV2ZUalZKUUtRdmVWbEpKUWhyclpjMFpWdmMyOS9IZEJId294MzNRR0E2cm5yZS9rZTlubjJCSG5VOVgzemZseG03N3QxV1BsbXdINTdmZndQdTZWZzhJRGlDRWhCSGh4UllrS1BKRUFNL1M5aUFnZGpaS3pLMExOWm5YSmJKeGVMeEFKZ1dOb0t3N1JhVEFjakNNRkk5QzVDQmpGQkZxTkJVQVlKSldhbVVGcWxBOEhZV3ljbVBoVDZzTkZRL3gyRXdaTGxlN0tFS1pRZytwZ1ZUQUU0V0E4aVJCYkVRS0pNUlREdzZqQW9BMlc1TWJrZWdFaWZveVhiRWpxME5SK01pUW5LUHFMbVBaTVkrSytNc2NRNytGSDVzTk9ScU80VmRJcWJ2eE1mb0R0WlNiWGoxd2dOeHVJNUZtWUo5Zkd4ZEl4VXFJdlp6U0hvbjFHUklkS2g2REVaMW9hK1N5Mmw3R3Zia3VPaW9IRmNtTGRHZTdlSEc4SHg4YWhTVjhRM1JGbUFOZWZQSm5lU1JtR0QrQWNzTDhaTzUzNzUwYWlTS0ZYbEFLalRUNmZLYWN5aDBvYnhFTVlwY1JPRXFvRXNrLytaVWZLbXF4ODYwOEwvencvTERsMGQzZHljaGlvRHd1ZFZCOWJuMVFmVTkvZlRITjZsNXJySVgzYlV1elhvZzVYRkh6OElpb2NrVC9zY0lINXZ3RnZOZzRmYzd1T2JuQXpCcWNmYTd2QXNDZ3hvRGlaTEJLaHhXbE5NQnRMb0tReFRic09KVGRQSEdzcXYzVFBuWnhzYnFuZHN2Vll2Zi9qOWRBN0FXKzVKTU9qU1Q4b1BrckhnM0NlVGtvbUFpSnVHTk5zMjNlZTY5cUFHd3pCaFlKMFR2RkZ3NFpIcjEwN3JoNnFMcXl6TjFZVWtTZ0lNU09SeXFKRFVkS0VrZ2tFSG5hZ3FTUGlLMjBkWkd0b3gxYmNuOXh3OC9FNG9hdkVidElPaUlyd1VITVo3T0RWODN6aVk2Y09uRHAvcGJwb2FkcXN3aTJuS3ZNV1RCODE3aFFqd1djaXVRVkcrOWJybVFabS9QaEszYUNZbUVHNlNsakE0SUp0UVpJTVhOL2Y4U0Q3a2MzYk90WUFJQUJlZHZsNEhvN3MyanhqMTkzblo4NDh2OXU1YUhOSDVHRlBidzhDc3Zrd1FyaGNybEZsMkZVYS9yVzVFNjhKTkJtcUgwMU5ZQ1NCZCtUdDI1L2RqMytPZTR1YzhNN1Y3dU81T2JKRFBWdXYvV1VNNGFYNEIycVVhZ2NCWDh1a2VaTHNLVk95SlhuU2N3SUdkOHVTYkduZU9ZNzI0ck41Zlh0R2JidTV2WDkrdk9Ob2dsWGphU0w2RlpxR0J1aGQ5d3BkUkcrUXFUUU5IYkEzbkVvWDBkNTU2M0dwRUI0aEo1V2hDRHhwS0l5SGFjYWxLTkk4dll3Z0tJWUxZUGVoamlnQkc4a21pTE9wS3F3QmVTazNESGhjcTJNSmYxczExdDlDbHJESEdQZjE4bzdwOWduMTZZNzJibnRzMm80MU1VSVpUZGptM2ZNMXo3emU0Tk1kNC8yS3U0Q2lYc1RlUk9BZG5GQ2c5dFUxVU1LbXNXYmhmTlpNSDZrSmw0elBJM3IxaDRrNCt1amtXQXpQVHlYdzh4Z0VIS015d3lhUXBtY3VEMTErczN5NSszSWdYZTZORGcrclNMbGNLYktDN0NKbHFrS1JXaERBZ3ZQZ1VRSFYrT0RVWXRTU1c2UHpNZkNUc3BQODQvMzlNaVJwRTBnNFBHLy83Q1FEWCtlVFc0TmE5dkRYeHF6bGc5QkJoZFFnOWg3N3pIMlVKUGtRQWMvajJWaHZzU0hKWUJtbWJSTm8wMktXbkhuQUVCdVNEZkZyTnE0SHBoVzBhWWRaREowdm90dWlxVDNuQzl4NmFQY0d6VnY0QWJ1TzNWOVFNZU9iV0dqUERkNWt5clVMVGFjQ1NnbjhJcVFBY1IrU1VYM1YrRmw0a1ZmbWdENHBHUHZDLzNnYzExTHBWU2oycytDNWViWUkxa0gwSkYwSXlncmY5dmsvUEJFYVZnNWdkQUlQUnVEWld5RUdVTXlBM1A1N3lZOG1ycHM2bGI2VnZtRHF1TTJIY1l5RndxSytJS2o0NzkvRk5VTTJhQnJOQ0R3dU1lUi9mZUFQbTFsdWxNbU1jck10UHRBMDhtOWhIcjRPUXhmK0hSbG9pcmZoVURLalVXYVdBL1diTXBmVmRTOGxEYjE0c1p6WEJlbTJNcHVONEdIYkZ1M1VTVHVrYUNacVRTUEp3eFYyb1Y0dnRDdGlZd1pheldnWjJoSFl6ZFkxZEt4Q2FOZnI3WG5RaSttZStneXR6N0N1eHBqR3JtRStXc3gzei9RU0haeDVKNkZvWEZIQ3h6dUNvSWl3d3FKd2w0QmZ5SWdnd1IydzZtWFA1WXhmTXBRa0M3amFYbUt0dm9QbDNndUZpTUdVNTBjY1RqRFAyRUZXTjdPVzRMaGJ4K2NGeVhYMTVKQjZKaFhuczNpcVMrMUx1eitFSUsxQnFoRnNjcUZKd0ZHVkVQMUtxSnZFSFRZd1d5aGxUUGlDcHI3bW9pUkpyek16N2RHa1Myam1SUmxFQ1BwMVoyZEpYL0RsU3gvbkVCWDJkNjhBY001SlppL0Q5a0FrV0dQaTZlS20zVUxYWXY0ODZhU2ZzamkxVWQyRVlrTUt3ak5Va1ptYUJGN0cwS0ZadmVQVmpraVZMZFE1R0daZ2kyOXdld0xKK1hOZWJMSWhCcm5KbDJkZzJPMlhDamx1cGpMaG9SQkVXaVFDMzd1VmFRcGREMlZvVkJhQ0psRDdFSFdjT0w5cXVDRkZ0UEM4MHNwTzVLWVdLUlZwYVlxYnFwNmM0cGFRQWtiL3pQWDdWZGNYcUw1OFJWbldhR05BU09LNEJDcWl5cFA4ZUVzdkluWVNXNGh0QkhvUjdYcWVoSStqSmlTT0N3a3dob1BGRitzaFVCdEthT3RGSjFGdm9qdk5LekVoZkYybXNGZmE4TEZ1ZWNHMHZLb0IxYjEya1FVSjRZa01sSm5nbVJaazhhdU16YW5ocVJjbWhDVmk1eGU5cS9ISVRPbnZjV3pwQjZXdTJXZHZETGtkWU4remt5ZkxhblFzWFUxWmw3VEw2WHpPYkplMk05OFVPN3VrRG1uWHNvN25UbkNkUENsQ3drZk1HMjNKYStCVDd0MTBmVWJLOVYrTjJXNWtrWDZQOTJyK01xbks5ZEZiQ29YNlZEK1luZXFSSjQ3Y0duOU9JdGJ5RHh2dkNmTGVjZDV6aU95MlJIM3RiQ0tnRHEzbW1vSXdaMGlJTTZ6Z3NZQ3g4MFBhNUI4enIxbEhkWVk5STJQeGIvdHZnT3VjTXZhTnl6M096V3dwM3RGNWlaa29ZRUFLWHFSWWd4WVh6RUFJb2lTS25SVi81bkRmbG5rejQ2WmZmb2Q2cEpTdW5uams2UEhtQUhnUitLOE9YNjR0V2JJNm96dysyc2FEQ2JRQ2NqSWRZVVpJVEFUYjhaMzN1aTdpV3dHei8zWHdpMVBKSmZQRlIzOWFCcVdqenc1VjE5YlpXeXZyeUZRY0tUT0Z4cVl6b3JnNWd5Y1FlcWtmdE0rUCtEYWlIK1JvWE1mWWNiK2o1ZFdqOFpwSkpYYXplVUJLUkc4Tmo4blI3bTRWSk5tbWpaZzJmNGU2YUhQQnJKcXROOGRXcko4eGF2WWJSb3BnTW1VUnhIRHVOTEVzN0tTeVY1elNaWDM1RHArTXVSYXdxUnQwZUsvcjVhaXBCS3JpRVBiZnFvZ0I4ZHR4cnhBRFo0ZmZSVkxnZzJuUUpuZ0VQUXVpaFJyd2U0VHVoQ2Z5YUFhU0R0d2FxQ1V5SGVHbndzZmhlT0FPSTUzMENrSUFMZ0dwZDk0Rk5tSVJ2S3JaUkZNd0c5blJFNmU3a1VjUVB4ditqdEgvRmRjQkw2ZWV5SEhnRnNIWDVXNjRwdWNmMEp0SUJPMWFDSWR4ZkdRcDlJQzhyQTd2UU81NExpQnpiVldIdmlLM0xZSXlBYmNSdnNvVkllWGNHV2hQNUdqRU94VStpYWdpU3pOTldLT3dXWGcwLzErcVBIQnV5akphdm52VU54SzJXd0RLSlQ4NU1HNW53c21MWjVNQURNRElqRTkrMlhNY2ovTkgrMHRSakcwNUZzbk1jSFkwbFd0RTVnWjVvWVozMlJzbDdJQS8yNTVqRlJmOEhtWUhmWVhSMitDTGZnNmIwaEFBd0JaSUFSMWtHQUJBSVlrQTlDempVU2Y4SGc4Qm9qQUJ2L2haaVNjV0NhU3p1RUIyUXp5Z0FzK0dCRUFFc29ZVTRFOXhiQ3BneW9FQUNFY0dFS0NEOG9DRkEwZXdTR0FUaXd0c2FZZ0hIQ3NhRWdBZDdHbElBWmxPblFrVlNBUHZvYTRCeFZXVmRlbWwvUWFYRjlhT3pkdDlaWmJXMWcyb3F1UUhLVlRNazRncnJTeXRMWFNWbHZDTGh2UHJodlJUdTF4bC9MTGFxZ3ErcGFyU1ZWcGVYc1d2cnEwYVdGcnNVdlIzdWFvamxNb3kzaWVuS0s2cUFFTzVERkNzU3FVNjZVcjFNMWk1UXJYODBWRHFUS1ZxMVVWb3RHMThRUlJVeFd3Y3FSUnB1cEJMcVJLcHlQQ3NlSjBoK2xGekVha01QeWxkcTBvRlBvc2FFc1RsRWE1YWtHcStQRkNwNG9ncTlGY2cxZi9YQXpXNU1sR2lzR3l0NkpJRU5Jd3hibzVzYXlNanBOTEdzdithS1haY3ovY3I1Uy9WZGx3dms4M2xDOFZTdVZLdDFSdk5WcnZUN2ZVSHc5RjRNcDBSUHdpaitJOG02WHl4WEswM1JzWW1wbWJtRnBaVzFqYTJkdllPams3T2NTb3Zib09oTEx0Rmd5ZUtNM2oxRDFOa3NzRFRCNmJ6L0FCL1Z6TFZKV1phRjQvbGZOQ2FIQi8zSzZkOFhwSm9IeXV2cjRwSnpPVDZCZVpoMFdJQmZzZU1LRVVGNHNuNHV4bTExaUNtSW5pMDhwTGtvamFpRUEzcTBKbVRIVkZKTHZ0dHJiUUY5UmlMa0VQK3lGWjFSV1JTek9rVlRJMStvRzNtRE56R01SakJTRm5qV3k1TERuUkY3bldHQkJWQjNxVW55TG8yUmJjUXF4RFhkL21uUUV6cEtyWFZlZEM2aTVxMmE2dmtpNFlzbm5ocFNuKzhVbnQ3Q1ZLQ1J5RVZzSnlLZ3lJdW5EVlU0dEZyRm5ENEc2amx5NUFNYzVoOVdldzArSkl2SW1Xa0wvcGpNZDk3aVQ2eXFKZ3VoRmVMdjlTNUpORTBIb09DZ29GeElMSW0vY1Z3Vm1BUUFaMEJUL2szSldrdmJ4ZXhEK2NuTVJGNUd0bWEyNXQ1R0FjQUFBPT1cIikgZm9ybWF0KFwid29mZjJcIik7XG59XG5cbi53dGljb25zIHtcblx0bGluZS1oZWlnaHQ6IDE7XG59XG5cbi53dGljb25zOmJlZm9yZSB7XG5cdGZvbnQtZmFtaWx5OiB3dGljb25zICFpbXBvcnRhbnQ7XG5cdGZvbnQtc3R5bGU6IG5vcm1hbDtcblx0Zm9udC13ZWlnaHQ6IG5vcm1hbCAhaW1wb3J0YW50O1xuXHR2ZXJ0aWNhbC1hbGlnbjogdG9wO1xufVxuXG4ud3RpY29uLWFjY291bnQ6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMDFcIjtcbn1cbi53dGljb24tYWRkOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTAyXCI7XG59XG4ud3RpY29uLWNhcmRSZXNpemVEcmFnOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTAzXCI7XG59XG4ud3RpY29uLWNhc3VhbDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwNFwiO1xufVxuLnd0aWNvbi1jaGVjazpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwNVwiO1xufVxuLnd0aWNvbi1jaGVja1NtYWxsOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTA2XCI7XG59XG4ud3RpY29uLWNoZXZyb246YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMDdcIjtcbn1cbi53dGljb24tY29weTpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwOFwiO1xufVxuLnd0aWNvbi1jb3B5U21hbGw6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMDlcIjtcbn1cbi53dGljb24tZGlzbWlzczpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwYVwiO1xufVxuLnd0aWNvbi1kb3duQ2hldnJvbjpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwYlwiO1xufVxuLnd0aWNvbi1lcnJvcjpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwY1wiO1xufVxuLnd0aWNvbi1leHBhbmQ6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMGRcIjtcbn1cbi53dGljb24tZmVlZGJhY2s6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMGVcIjtcbn1cbi53dGljb24tZmlsbGVkRG93bkFycm93OmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTBmXCI7XG59XG4ud3RpY29uLWZpbmQ6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTBcIjtcbn1cbi53dGljb24tZm9ybWFsOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTExXCI7XG59XG4ud3RpY29uLWdpZnQ6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTJcIjtcbn1cbi53dGljb24tZ3JheUxvZ286YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTNcIjtcbn1cbi53dGljb24taWdub3JlOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTE0XCI7XG59XG4ud3RpY29uLWluZm86YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTVcIjtcbn1cbi53dGljb24tbGVmdENoZXZyb246YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTZcIjtcbn1cbi53dGljb24tbG9nbzpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExN1wiO1xufVxuLnd0aWNvbi1sb3ZlOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTE4XCI7XG59XG4ud3RpY29uLW5vUmVjb21tZW5kYXRpb25zOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTE5XCI7XG59XG4ud3RpY29uLXBhcmFncmFwaFJld3JpdGU6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMWFcIjtcbn1cbi53dGljb24tcGFzdGU6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMWJcIjtcbn1cbi53dGljb24tcGluOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTFjXCI7XG59XG4ud3RpY29uLXByZW1pdW06YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMWRcIjtcbn1cbi53dGljb24tcHJlbWl1bURldGFpbDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExZVwiO1xufVxuLnd0aWNvbi1wcmVtaXVtRnVsbDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExZlwiO1xufVxuLnd0aWNvbi1yZWNvbW1lbmRhdGlvbkxpZ2h0OmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTIwXCI7XG59XG4ud3RpY29uLXJlY29tbWVuZGF0aW9uTGlnaHRDYXJkOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTIxXCI7XG59XG4ud3RpY29uLXJlY29tbWVuZGF0aW9uTGlnaHROb1N1Z2dlc3Rpb25zOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTIyXCI7XG59XG4ud3RpY29uLXJlZmluZTpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEyM1wiO1xufVxuLnd0aWNvbi1yZXdyaXRlOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTI0XCI7XG59XG4ud3RpY29uLXJpZ2h0Q2hldnJvbjpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEyNVwiO1xufVxuLnd0aWNvbi1yb2NrZXQ6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMjZcIjtcbn1cbi53dGljb24tc2VudGVuY2VFeGFtcGxlczpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEyN1wiO1xufVxuLnd0aWNvbi1zZXR0aW5nczpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEyOFwiO1xufVxuLnd0aWNvbi1zaG9ydGVuOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTI5XCI7XG59XG4ud3RpY29uLXR1dG9yaWFsOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTJhXCI7XG59XG4ud3RpY29uLXVubG9jazpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEyYlwiO1xufVxuLnd0aWNvbi13YXJuOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTJjXCI7XG59XG4ud3RpY29uLVdvcmR0dW5lQnV0dG9uOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTJkXCI7XG59XG4ud3RpY29uLXg6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMmVcIjtcbn1cbiJdLCJzb3VyY2VSb290IjoiIn0= */
    </style>
  </head>
  <body>

  <?php include('inc/header.php');?>



<!-- Page Header Start -->
<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Progress Report </h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Progress report</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


      <div class="container">
        <h4 style="color:FFFFFF;">Since we started in 2016, your support and partnership has helped us accomplish a lot through the following projects.</h4>
      </div>

    <div id="snippetContent">
      <div class="container">
        <div class="timeline">
          
        <?php include('inc/timeline.php');?>
        
          
        </div>
      </div>



      <?php include('inc/footer.php'); ?>

  
      <style type="text/css">
        body {
          margin-top: 20px;
          color: #bcd0f7;
          background: #FFFFFF;
        }
        .timeline {
          position: relative;
          background: #27a62a;
          -webkit-border-radius: 4px;
          -moz-border-radius: 4px;
          border-radius: 4px;
          padding: 5rem;
          margin: 0 auto 1rem auto;
          overflow: hidden;
        }
        .timeline:after {
          content: "";
          position: absolute;
          top: 0;
          left: 50%;
          margin-left: -2px;
          border-right: 2px dashed #4b546f;
          height: 100%;
          display: block;
        }

        .timeline-row {
          padding-left: 50%;
          position: relative;
          margin-bottom: 30px;
        }
        .timeline-row .timeline-time {
          position: absolute;
          right: 50%;
          top: 15px;
          text-align: right;
          margin-right: 20px;
          color: #bcd0f7;
          font-size: 1.5rem;
        }
        .timeline-row .timeline-time small {
          display: block;
          font-size: 0.8rem;
        }
        .timeline-row .timeline-content {
          position: relative;
          padding: 20px 30px;
          background: #FFFFFF;
          -webkit-border-radius: 4px;
          -moz-border-radius: 4px;
          border-radius: 4px;
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
          text-align: center;
        }
        .timeline-row .timeline-content:after {
          content: "";
          position: absolute;
          top: 20px;
          height: 16px;
          width: 16px;
          background: #FFFFFF;
        }
        .timeline-row .timeline-content:before {
          content: "";
          position: absolute;
          top: 20px;
          right: -49px;
          width: 20px;
          height: 20px;
          -webkit-border-radius: 100px;
          -moz-border-radius: 100px;
          border-radius: 100px;
          z-index: 10;
          background: #27a62a;
          border: 2px dashed #4b546f;
        }
        .timeline-row .timeline-content h4 {
          margin: 0 0 20px 0;
          overflow: hidden;
          white-space: nowrap;
          text-overflow: ellipsis;
          line-height: 150%;
        }
        .timeline-row .timeline-content p {
          margin-bottom: 30px;
          line-height: 150%;
        }
        .timeline-row .timeline-content i {
          font-size: 1.2rem;
          line-height: 100%;
          padding: 15px;
          -webkit-border-radius: 100px;
          -moz-border-radius: 100px;
          border-radius: 100px;
          background: #27a62a;
          margin-bottom: 10px;
          display: inline-block;
        }
        .timeline-row .timeline-content .thumbs {
          margin-bottom: 20px;
          display: flex;
        }
        .timeline-row .timeline-content .thumbs img {
          margin: 5px;
          max-width: 60px;
        }
        .timeline-row .timeline-content .badge {
          color: #ffffff;
          background: linear-gradient(120deg, #00b5fd 0%, #0047b1 100%);
        }
        .timeline-row:nth-child(even) .timeline-content {
          margin-left: 40px;
          text-align: left;
        }
        .timeline-row:nth-child(even) .timeline-content:after {
          left: -8px;
          right: initial;
          border-bottom: 0;
          border-left: 0;
          transform: rotate(-135deg);
        }
        .timeline-row:nth-child(even) .timeline-content:before {
          left: -52px;
          right: initial;
        }
        .timeline-row:nth-child(odd) {
          padding-left: 0;
          padding-right: 50%;
        }
        .timeline-row:nth-child(odd) .timeline-time {
          right: auto;
          left: 50%;
          text-align: left;
          margin-right: 0;
          margin-left: 20px;
        }
        .timeline-row:nth-child(odd) .timeline-content {
          margin-right: 40px;
        }
        .timeline-row:nth-child(odd) .timeline-content:after {
          right: -8px;
          border-left: 0;
          border-bottom: 0;
          transform: rotate(45deg);
        }

        @media (max-width: 992px) {
          .timeline {
            padding: 15px;
          }
          .timeline:after {
            border: 0;
          }
          .timeline .timeline-row:nth-child(odd) {
            padding: 0;
          }
          .timeline .timeline-row:nth-child(odd) .timeline-time {
            position: relative;
            top: 0;
            left: 0;
            margin: 0 0 10px 0;
          }
          .timeline .timeline-row:nth-child(odd) .timeline-content {
            margin: 0;
          }
          .timeline .timeline-row:nth-child(odd) .timeline-content:before {
            display: none;
          }
          .timeline .timeline-row:nth-child(odd) .timeline-content:after {
            display: none;
          }
          .timeline .timeline-row:nth-child(even) {
            padding: 0;
          }
          .timeline .timeline-row:nth-child(even) .timeline-time {
            position: relative;
            top: 0;
            left: 0;
            margin: 0 0 10px 0;
            text-align: left;
          }
          .timeline .timeline-row:nth-child(even) .timeline-content {
            margin: 0;
          }
          .timeline .timeline-row:nth-child(even) .timeline-content:before {
            display: none;
          }
          .timeline .timeline-row:nth-child(even) .timeline-content:after {
            display: none;
          }
        }
      </style>
      <script type="text/javascript"></script>
    </div>
    <script
      async=""
      src="./Preview bootstrap html snippet. dark timeline_files/js"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-F1RTS0P1CD");
    </script>
  </body>
  <grammarly-desktop-integration data-grammarly-shadow-root="true"
    ><template shadowrootmode="open"
      ><style>
        div.grammarly-desktop-integration {
          position: absolute;
          width: 1px;
          height: 1px;
          padding: 0;
          margin: -1px;
          overflow: hidden;
          clip: rect(0, 0, 0, 0);
          white-space: nowrap;
          border: 0;
          -moz-user-select: none;
          -webkit-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        div.grammarly-desktop-integration:before {
          content: attr(data-content);
        }
      </style>
      <div
        aria-label="grammarly-integration"
        role="group"
        tabindex="-1"
        class="grammarly-desktop-integration"
        data-content='{"mode":"full","isActive":true,"isUserDisabled":false}'
      ></div></template
  ></grammarly-desktop-integration>


  
</html>
