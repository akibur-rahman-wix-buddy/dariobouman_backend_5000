@extends('frontend.app')

@section('title')
    template
@endsection

@push('headScripts')
@endpush

@section('main')
    <div class="content">
        <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
                <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
                <li class="breadcrumb-item active">Default</li>
            </ol>
        </nav>
        <form class="mb-9">
            <div class="row g-3 flex-between-end mb-5">
                <div class="col-auto">
                    <h2 class="mb-2">Add a product</h2>
                    <h5 class="text-body-tertiary fw-semibold">Orders placed across your store</h5>
                </div>
                <div class="col-auto"><button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0"
                        type="button">Discard</button><button class="btn btn-phoenix-primary me-2 mb-2 mb-sm-0"
                        type="button">Save draft</button><button class="btn btn-primary mb-2 mb-sm-0"
                        type="submit">Publish product</button></div>
            </div>
            <div class="row g-5">
                <div class="col-12 col-xl-8">
                    <h4 class="mb-3">Product Title</h4><input class="form-control mb-5" type="text"
                        placeholder="Write title here...">
                    <div class="mb-6">
                        <h4 class="mb-3"> Product Description</h4>
                        <textarea class="tinymce" name="content"
                            data-tinymce="{&quot;height&quot;:&quot;15rem&quot;,&quot;placeholder&quot;:&quot;Write a description here...&quot;}"
                            id="mce_0" style="display: none;" aria-hidden="true"></textarea>
                        <div role="application" class="tox tox-tinymce" aria-disabled="false"
                            style="visibility: hidden; height: 15rem;">
                            <div class="tox-editor-container">
                                <div data-alloy-vertical-dir="toptobottom" class="tox-editor-header">
                                    <div role="group" class="tox-toolbar-overlord" aria-disabled="false">
                                        <div role="group" class="tox-toolbar__primary">
                                            <div title="history" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                class="tox-toolbar__group"><button aria-label="Undo" data-mce-name="undo"
                                                    type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false"
                                                    style="width: 24px;"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24" focusable="false">
                                                            <path
                                                                d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 0 1-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 1 1-1.4 1.4l-5-5a1 1 0 0 1 0-1.4l5-5a1 1 0 0 1 1.4 1.4L6.4 8Z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></span></button><button aria-label="Redo" data-mce-name="redo"
                                                    type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled"
                                                    aria-disabled="true" style="width: 24px;"><span
                                                        class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                            height="24" focusable="false">
                                                            <path
                                                                d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 1 1-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 1 1 1.4-1.4l5 5a1 1 0 0 1 0 1.4l-5 5a1 1 0 0 1-1.4-1.4l3.3-3.3Z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></span></button></div>
                                            <div title="formatting" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                class="tox-toolbar__group"><button aria-label="Bold" data-mce-name="bold"
                                                    type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false"
                                                    aria-pressed="false" style="width: 24px;"><span
                                                        class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                            height="24" focusable="false">
                                                            <path
                                                                d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 0 1-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8Zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4Zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4Z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button><button aria-label="Italic"
                                                    data-mce-name="italic" type="button" tabindex="-1" class="tox-tbtn"
                                                    aria-disabled="false" aria-pressed="false" style="width: 24px;"><span
                                                        class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                            height="24" focusable="false">
                                                            <path
                                                                d="m16.7 4.7-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8Z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button><button aria-label="Underline"
                                                    data-mce-name="underline" type="button" tabindex="-1"
                                                    class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                    style="width: 24px;"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24" focusable="false">
                                                            <path
                                                                d="M16 5c.6 0 1 .4 1 1v5.5a4 4 0 0 1-.4 1.8l-1 1.4a5.3 5.3 0 0 1-5.5 1 5 5 0 0 1-1.6-1c-.5-.4-.8-.9-1.1-1.4a4 4 0 0 1-.4-1.8V6c0-.6.4-1 1-1s1 .4 1 1v5.5c0 .3 0 .6.2 1l.6.7a3.3 3.3 0 0 0 2.2.8 3.4 3.4 0 0 0 2.2-.8c.3-.2.4-.5.6-.8l.2-.9V6c0-.6.4-1 1-1ZM8 17h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2Z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button><button aria-label="Strikethrough"
                                                    data-mce-name="strikethrough" type="button" tabindex="-1"
                                                    class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                    style="width: 24px;"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24" focusable="false">
                                                            <g fill-rule="evenodd">
                                                                <path
                                                                    d="M15.6 8.5c-.5-.7-1-1.1-1.3-1.3-.6-.4-1.3-.6-2-.6-2.7 0-2.8 1.7-2.8 2.1 0 1.6 1.8 2 3.2 2.3 4.4.9 4.6 2.8 4.6 3.9 0 1.4-.7 4.1-5 4.1A6.2 6.2 0 0 1 7 16.4l1.5-1.1c.4.6 1.6 2 3.7 2 1.6 0 2.5-.4 3-1.2.4-.8.3-2-.8-2.6-.7-.4-1.6-.7-2.9-1-1-.2-3.9-.8-3.9-3.6C7.6 6 10.3 5 12.4 5c2.9 0 4.2 1.6 4.7 2.4l-1.5 1.1Z">
                                                                </path>
                                                                <path d="M5 11h14a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                                                                    fill-rule="nonzero"></path>
                                                            </g>
                                                        </svg></span></button></div>
                                            <div title="alignment" role="toolbar" data-alloy-tabstop="true"
                                                tabindex="-1" class="tox-toolbar__group"><button aria-label="Align left"
                                                    data-mce-name="alignleft" type="button" tabindex="-1"
                                                    class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                    style="width: 24px;"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24" focusable="false">
                                                            <path
                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Zm0-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button><button aria-label="Align center"
                                                    data-mce-name="aligncenter" type="button" tabindex="-1"
                                                    class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                    style="width: 24px;"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24" focusable="false">
                                                            <path
                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm3 4h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 1 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2Zm-3-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button><button aria-label="Align right"
                                                    data-mce-name="alignright" type="button" tabindex="-1"
                                                    class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                    style="width: 24px;"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24" focusable="false">
                                                            <path
                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm6 4h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm-6-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button><button aria-label="Justify"
                                                    data-mce-name="alignjustify" type="button" tabindex="-1"
                                                    class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                    style="width: 24px;"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24" focusable="false">
                                                            <path
                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button></div>
                                            <div title="list" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                class="tox-toolbar__group"><button aria-label="Numbered list"
                                                    data-mce-name="numlist" type="button" tabindex="-1"
                                                    class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                    style="width: 24px;"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24" focusable="false">
                                                            <path
                                                                d="M10 17h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 1 1 0-2ZM6 4v3.5c0 .3-.2.5-.5.5a.5.5 0 0 1-.5-.5V5h-.5a.5.5 0 0 1 0-1H6Zm-1 8.8.2.2h1.3c.3 0 .5.2.5.5s-.2.5-.5.5H4.9a1 1 0 0 1-.9-1V13c0-.4.3-.8.6-1l1.2-.4.2-.3a.2.2 0 0 0-.2-.2H4.5a.5.5 0 0 1-.5-.5c0-.3.2-.5.5-.5h1.6c.5 0 .9.4.9 1v.1c0 .4-.3.8-.6 1l-1.2.4-.2.3ZM7 17v2c0 .6-.4 1-1 1H4.5a.5.5 0 0 1 0-1h1.2c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.4a.4.4 0 1 1 0-.8h1.3c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.5a.5.5 0 1 1 0-1H6c.6 0 1 .4 1 1Z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button><button aria-label="Bullet list"
                                                    data-mce-name="bullist" type="button" tabindex="-1"
                                                    class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                    style="width: 24px;"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24" focusable="false">
                                                            <path
                                                                d="M11 5h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2ZM4.5 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button></div>
                                            <div title="link" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                class="tox-toolbar__group"><button aria-label="Insert/edit link"
                                                    data-mce-name="link" type="button" tabindex="-1" class="tox-tbtn"
                                                    aria-disabled="false" aria-pressed="false" style="width: 24px;"><span
                                                        class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                            height="24" focusable="false">
                                                            <path
                                                                d="M6.2 12.3a1 1 0 0 1 1.4 1.4l-2 2a2 2 0 1 0 2.6 2.8l4.8-4.8a1 1 0 0 0 0-1.4 1 1 0 1 1 1.4-1.3 2.9 2.9 0 0 1 0 4L9.6 20a3.9 3.9 0 0 1-5.5-5.5l2-2Zm11.6-.6a1 1 0 0 1-1.4-1.4l2-2a2 2 0 1 0-2.6-2.8L11 10.3a1 1 0 0 0 0 1.4A1 1 0 1 1 9.6 13a2.9 2.9 0 0 1 0-4L14.4 4a3.9 3.9 0 0 1 5.5 5.5l-2 2Z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></span></button></div>
                                        </div>
                                    </div>
                                    <div class="tox-anchorbar"></div>
                                </div>
                                <div class="tox-sidebar-wrap">
                                    <div class="tox-edit-area"><iframe id="mce_0_ifr" frameborder="0"
                                            allowtransparency="true" title="Rich Text Area" class="tox-edit-area__iframe"
                                            srcdoc="<!DOCTYPE html><html><head><meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot; /></head><body id=&quot;tinymce&quot; class=&quot;mce-content-body &quot; data-id=&quot;mce_0&quot; aria-label=&quot;Rich Text Area. Press ALT-0 for help.&quot;><br></body></html>"
                                            __idm_id__="630785"></iframe><grammarly-extension
                                            data-grammarly-shadow-root="true"
                                            style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: auto;"
                                            class="dnXmp"></grammarly-extension><grammarly-extension
                                            data-grammarly-shadow-root="true" class="dnXmp"
                                            style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: auto;"></grammarly-extension>
                                    </div>
                                    <div role="presentation" class="tox-sidebar">
                                        <div data-alloy-tabstop="true" tabindex="-1"
                                            class="tox-sidebar__slider tox-sidebar--sliding-closed" style="width: 0px;">
                                            <div class="tox-sidebar__pane-container"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tox-bottom-anchorbar"></div>
                            </div>
                            <div aria-hidden="true" class="tox-view-wrap" style="display: none;">
                                <div class="tox-view-wrap__slot-container"></div>
                            </div>
                            <div aria-hidden="true" class="tox-throbber" style="display: none;"></div>
                        </div>
                    </div>
                    <h4 class="mb-3">Display images</h4>
                    <div class="dropzone dropzone-multiple p-0 mb-5 dz-clickable" id="my-awesome-dropzone"
                        data-dropzone="data-dropzone">

                        <div class="dz-preview d-flex flex-wrap"></div>
                        <div class="dz-message text-body-tertiary text-opacity-85" data-dz-message="data-dz-message">Drag
                            your photo here<span class="text-body-secondary px-1">or</span><button
                                class="btn btn-link p-0" type="button">Browse from device</button><br><img
                                class="mt-3 me-2" src="../../../assets/img/icons/image-icon.png" width="40"
                                alt=""></div>
                    </div>
                    <h4 class="mb-3">Inventory</h4>
                    <div class="row g-0 border-top border-bottom">
                        <div class="col-sm-4">
                            <div class="nav flex-sm-column border-bottom border-bottom-sm-0 border-end-sm fs-9 vertical-tab h-100 justify-content-between"
                                role="tablist" aria-orientation="vertical"><a
                                    class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                                    id="pricingTab" data-bs-toggle="tab" data-bs-target="#pricingTabContent"
                                    role="tab" aria-controls="pricingTabContent" aria-selected="false"
                                    tabindex="-1"> <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                        height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-tag me-sm-2 fs-4 nav-icons">
                                        <path
                                            d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                        </path>
                                        <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                    </svg><span class="d-none d-sm-inline">Pricing</span></a><a
                                    class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                                    id="restockTab" data-bs-toggle="tab" data-bs-target="#restockTabContent"
                                    role="tab" aria-controls="restockTabContent" aria-selected="false"
                                    tabindex="-1"> <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                        height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-package me-sm-2 fs-4 nav-icons">
                                        <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                                        <path
                                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                        </path>
                                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                    </svg><span class="d-none d-sm-inline">Restock</span></a><a
                                    class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                                    id="shippingTab" data-bs-toggle="tab" data-bs-target="#shippingTabContent"
                                    role="tab" aria-controls="shippingTabContent" aria-selected="false"
                                    tabindex="-1"> <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                        height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-truck me-sm-2 fs-4 nav-icons">
                                        <rect x="1" y="3" width="15" height="13"></rect>
                                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                        <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                        <circle cx="18.5" cy="18.5" r="2.5"></circle>
                                    </svg><span class="d-none d-sm-inline">Shipping</span></a><a
                                    class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                                    id="productsTab" data-bs-toggle="tab" data-bs-target="#productsTabContent"
                                    role="tab" aria-controls="productsTabContent" aria-selected="false"
                                    tabindex="-1"> <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                        height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-globe me-sm-2 fs-4 nav-icons">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path
                                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                        </path>
                                    </svg><span class="d-none d-sm-inline">Global Delivery</span></a><a
                                    class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                                    id="attributesTab" data-bs-toggle="tab" data-bs-target="#attributesTabContent"
                                    role="tab" aria-controls="attributesTabContent" aria-selected="false"
                                    tabindex="-1"> <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                        height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-sliders me-sm-2 fs-4 nav-icons">
                                        <line x1="4" y1="21" x2="4" y2="14"></line>
                                        <line x1="4" y1="10" x2="4" y2="3"></line>
                                        <line x1="12" y1="21" x2="12" y2="12"></line>
                                        <line x1="12" y1="8" x2="12" y2="3"></line>
                                        <line x1="20" y1="21" x2="20" y2="16"></line>
                                        <line x1="20" y1="12" x2="20" y2="3"></line>
                                        <line x1="1" y1="14" x2="7" y2="14"></line>
                                        <line x1="9" y1="8" x2="15" y2="8"></line>
                                        <line x1="17" y1="16" x2="23" y2="16"></line>
                                    </svg><span class="d-none d-sm-inline">Attributes</span></a><a
                                    class="nav-link text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center active"
                                    id="advancedTab" data-bs-toggle="tab" data-bs-target="#advancedTabContent"
                                    role="tab" aria-controls="advancedTabContent" aria-selected="true"> <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-lock me-sm-2 fs-4 nav-icons">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2">
                                        </rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg><span class="d-none d-sm-inline">Advanced</span></a></div>
                        </div>
                        <div class="col-sm-8">
                            <div class="tab-content py-3 ps-sm-4 h-100">
                                <div class="tab-pane fade" id="pricingTabContent" role="tabpanel"
                                    aria-labelledby="pricingTab">
                                    <h4 class="mb-3 d-sm-none">Pricing</h4>
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-body-highlight">Regular price</h5><input
                                                class="form-control" type="text" placeholder="$$$">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-body-highlight">Sale price</h5><input
                                                class="form-control" type="text" placeholder="$$$">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade h-100" id="restockTabContent" role="tabpanel"
                                    aria-labelledby="restockTab">
                                    <div class="d-flex flex-column h-100">
                                        <h5 class="mb-3 text-body-highlight">Add to Stock</h5>
                                        <div class="row g-3 flex-1 mb-4">
                                            <div class="col-sm-7"><input class="form-control" type="number"
                                                    placeholder="Quantity"></div>
                                            <div class="col-sm"><button class="btn btn-primary" type="button"><svg
                                                        class="svg-inline--fa fa-check me-1 fs-10" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="check"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                                        </path>
                                                    </svg><!-- <span class="fa-solid fa-check me-1 fs-10"></span> Font Awesome fontawesome.com -->Confirm</button>
                                            </div>
                                        </div>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th style="width: 200px;"></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-body-highlight fw-bold py-1">Product in stock now:</td>
                                                    <td class="text-body-tertiary fw-semibold py-1">$1,090<button
                                                            class="btn p-0" type="button"><svg
                                                                class="svg-inline--fa fa-rotate text-body ms-1"
                                                                style="--phoenix-text-opacity: .6;" aria-hidden="true"
                                                                focusable="false" data-prefix="fas" data-icon="rotate"
                                                                role="img" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 512 512" data-fa-i2svg="">
                                                                <path fill="currentColor"
                                                                    d="M142.9 142.9c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5c0 0 0 0 0 0H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5c7.7-21.8 20.2-42.3 37.8-59.8zM16 312v7.6 .7V440c0 9.7 5.8 18.5 14.8 22.2s19.3 1.7 26.2-5.2l41.6-41.6c87.6 86.5 228.7 86.2 315.8-1c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.2 62.2-162.7 62.5-225.3 1L185 329c6.9-6.9 8.9-17.2 5.2-26.2s-12.5-14.8-22.2-14.8H48.4h-.7H40c-13.3 0-24 10.7-24 24z">
                                                                </path>
                                                            </svg><!-- <span class="fa-solid fa-rotate text-body ms-1" style="--phoenix-text-opacity: .6;"></span> Font Awesome fontawesome.com --></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-body-highlight fw-bold py-1">Product in transit:</td>
                                                    <td class="text-body-tertiary fw-semibold py-1">5000</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-body-highlight fw-bold py-1">Last time restocked:</td>
                                                    <td class="text-body-tertiary fw-semibold py-1">30th June, 2021</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-body-highlight fw-bold py-1">Total stock over lifetime:
                                                    </td>
                                                    <td class="text-body-tertiary fw-semibold py-1">20,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade h-100" id="shippingTabContent" role="tabpanel"
                                    aria-labelledby="shippingTab">
                                    <div class="d-flex flex-column h-100">
                                        <h5 class="mb-3 text-body-highlight">Shipping Type</h5>
                                        <div class="flex-1">
                                            <div class="mb-4">
                                                <div class="form-check mb-1"><input class="form-check-input"
                                                        type="radio" name="shippingRadio"
                                                        id="fullfilledBySeller"><label
                                                        class="form-check-label fs-8 text-body"
                                                        for="fullfilledBySeller">Fullfilled by Seller</label></div>
                                                <div class="ps-4">
                                                    <p class="text-body-secondary fs-9 mb-0">You’ll be responsible for
                                                        product delivery. <br>Any damage or delay during shipping may cost
                                                        you a Damage fee.</p>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="form-check mb-1"><input class="form-check-input"
                                                        type="radio" name="shippingRadio" id="fullfilledByPhoenix"
                                                        checked="checked"><label
                                                        class="form-check-label fs-8 text-body d-flex align-items-center"
                                                        for="fullfilledByPhoenix">Fullfilled by Phoenix <span
                                                            class="badge badge-phoenix badge-phoenix-warning fs-10 ms-2">Recommended</span></label>
                                                </div>
                                                <div class="ps-4">
                                                    <p class="text-body-secondary fs-9 mb-0">Your product, Our
                                                        responsibility.<br>For a measly fee, we will handle the delivery
                                                        process for you.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="fs-9 fw-semibold mb-0">See our <a class="fw-bold"
                                                href="#!">Delivery terms and conditions </a>for details.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="productsTabContent" role="tabpanel"
                                    aria-labelledby="productsTab">
                                    <h5 class="mb-3 text-body-highlight">Global Delivery</h5>
                                    <div class="mb-3">
                                        <div class="form-check"><input class="form-check-input" type="radio"
                                                name="deliveryRadio" id="worldwideDelivery"><label
                                                class="form-check-label fs-8 text-body" for="worldwideDelivery">Worldwide
                                                delivery</label></div>
                                        <div class="ps-4">
                                            <p class="fs-9 mb-0 text-body-secondary">Only available with Shipping method:
                                                <a href="#!">Fullfilled by Phoenix</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check"><input class="form-check-input" type="radio"
                                                name="deliveryRadio" checked="checked" id="selectedCountry"><label
                                                class="form-check-label fs-8 text-body" for="selectedCountry">Selected
                                                Countries</label></div>
                                        <div class="ps-4" style="max-width: 350px;">
                                            <div class="choices" data-type="select-multiple" role="combobox"
                                                aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                <div class="choices__inner"><select
                                                        class="form-select ps-4 choices__input" id="organizerMultiple"
                                                        data-choices="data-choices" multiple="multiple"
                                                        data-options="{&quot;removeItemButton&quot;:true,&quot;placeholder&quot;:true}"
                                                        hidden="" tabindex="-1" data-choice="active"></select>
                                                    <div class="choices__list choices__list--multiple"></div><input
                                                        type="search" name="search_terms"
                                                        class="choices__input choices__input--cloned" autocomplete="off"
                                                        autocapitalize="off" spellcheck="false" role="textbox"
                                                        aria-autocomplete="list" aria-label="Type Country name"
                                                        placeholder="Type Country name"
                                                        style="min-width: 18ch; width: 1ch;">
                                                </div>
                                                <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                    <div class="choices__list" aria-multiselectable="true"
                                                        role="listbox">
                                                        <div id="choices--organizerMultiple-item-choice-1"
                                                            class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                            role="option" data-choice="" data-id="1"
                                                            data-value="Canada" data-select-text=""
                                                            data-choice-selectable="" aria-selected="true">Canada</div>
                                                        <div id="choices--organizerMultiple-item-choice-2"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="2"
                                                            data-value="Mexico" data-select-text=""
                                                            data-choice-selectable="">Mexico</div>
                                                        <div id="choices--organizerMultiple-item-choice-4"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="4"
                                                            data-value="United Kingdom" data-select-text=""
                                                            data-choice-selectable="">United Kingdom</div>
                                                        <div id="choices--organizerMultiple-item-choice-5"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="5"
                                                            data-value="United States of America" data-select-text=""
                                                            data-choice-selectable="">United States of America</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-check"><input class="form-check-input" type="radio"
                                                name="deliveryRadio" id="localDelivery"><label
                                                class="form-check-label fs-8 text-body" for="localDelivery">Local
                                                delivery</label></div>
                                        <p class="fs-9 ms-4 mb-0 text-body-secondary">Deliver to your country of residence
                                            <a href="#!">Change profile address </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="attributesTabContent" role="tabpanel"
                                    aria-labelledby="attributesTab">
                                    <h5 class="mb-3 text-body-highlight">Attributes</h5>
                                    <div class="form-check"><input class="form-check-input" id="fragileCheck"
                                            type="checkbox"><label class="form-check-label text-body fs-8"
                                            for="fragileCheck">Fragile Product</label></div>
                                    <div class="form-check"><input class="form-check-input" id="biodegradableCheck"
                                            type="checkbox"><label class="form-check-label text-body fs-8"
                                            for="biodegradableCheck">Biodegradable</label></div>
                                    <div class="mb-3">
                                        <div class="form-check"><input class="form-check-input" id="frozenCheck"
                                                type="checkbox" checked="checked"><label
                                                class="form-check-label text-body fs-8" for="frozenCheck">Frozen
                                                Product</label><input class="form-control" type="text"
                                                placeholder="Max. allowed Temperature" style="max-width: 350px;"></div>
                                    </div>
                                    <div class="form-check"><input class="form-check-input" id="productCheck"
                                            type="checkbox" checked="checked"><label
                                            class="form-check-label text-body fs-8" for="productCheck">Expiry Date of
                                            Product</label><input
                                            class="form-control inventory-attributes datetimepicker flatpickr-input"
                                            id="inventory" type="text" style="max-width: 350px;" placeholder="d/m/y"
                                            data-options="{&quot;disableMobile&quot;:true}" readonly="readonly"></div>
                                </div>
                                <div class="tab-pane fade active show" id="advancedTabContent" role="tabpanel"
                                    aria-labelledby="advancedTab">
                                    <h5 class="mb-3 text-body-highlight">Advanced</h5>
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-body-highlight">Product ID Type</h5><select
                                                class="form-select" aria-label="form-select-lg example">
                                                <option selected="selected">ISBN</option>
                                                <option value="1">UPC</option>
                                                <option value="2">EAN</option>
                                                <option value="3">JAN</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-body-highlight">Product ID</h5><input
                                                class="form-control" type="text" placeholder="ISBN Number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="row g-2">
                        <div class="col-12 col-xl-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Organize</h4>
                                    <div class="row gx-3">
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap mb-2">
                                                    <h5 class="mb-0 text-body-highlight me-2">Category</h5><a
                                                        class="fw-bold fs-9" href="#!">Add new category</a>
                                                </div><select class="form-select mb-3" aria-label="category">
                                                    <option value="men-cloth">Men's Clothing</option>
                                                    <option value="women-cloth">Womens's Clothing</option>
                                                    <option value="kid-cloth">Kid's Clothing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap mb-2">
                                                    <h5 class="mb-0 text-body-highlight me-2">Vendor</h5><a
                                                        class="fw-bold fs-9" href="#!">Add new vendor</a>
                                                </div><select class="form-select mb-3" aria-label="category">
                                                    <option value="men-cloth">Men's Clothing</option>
                                                    <option value="women-cloth">Womens's Clothing</option>
                                                    <option value="kid-cloth">Kid's Clothing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <h5 class="mb-2 text-body-highlight">Collection</h5><input
                                                    class="form-control mb-xl-3" type="text" placeholder="Collection">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="d-flex flex-wrap mb-2">
                                                <h5 class="mb-0 text-body-highlight me-2">Tags</h5><a
                                                    class="fw-bold fs-9 lh-sm" href="#!">View all tags</a>
                                            </div><select class="form-select" aria-label="category">
                                                <option value="men-cloth">Men's Clothing</option>
                                                <option value="women-cloth">Womens's Clothing</option>
                                                <option value="kid-cloth">Kid's Clothing</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Variants</h4>
                                    <div class="row g-3">
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div
                                                class="border-bottom border-translucent border-dashed border-sm-0 border-bottom-xl pb-4">
                                                <div class="d-flex flex-wrap mb-2">
                                                    <h5 class="text-body-highlight me-2">Option 1</h5><a
                                                        class="fw-bold fs-9" href="#!">Remove</a>
                                                </div><select class="form-select mb-3">
                                                    <option value="size">Size</option>
                                                    <option value="color">Color</option>
                                                    <option value="weight">Weight</option>
                                                    <option value="smell">Smell</option>
                                                </select>
                                                <div class="product-variant-select-menu">
                                                    <div class="choices" data-type="select-multiple" role="combobox"
                                                        aria-autocomplete="list" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <div class="choices__inner"><select
                                                                class="form-select mb-3 choices__input"
                                                                data-choices="data-choices" multiple="multiple"
                                                                data-options="{&quot;removeItemButton&quot;:true,&quot;placeholder&quot;:true}"
                                                                hidden="" tabindex="-1"
                                                                data-choice="active"></select>
                                                            <div class="choices__list choices__list--multiple"></div><input
                                                                type="search" name="search_terms"
                                                                class="choices__input choices__input--cloned"
                                                                autocomplete="off" autocapitalize="off"
                                                                spellcheck="false" role="textbox"
                                                                aria-autocomplete="list" aria-label="null"
                                                                aria-activedescendant="choices--9g7o-item-choice-3">
                                                        </div>
                                                        <div class="choices__list choices__list--dropdown"
                                                            aria-expanded="false">
                                                            <div class="choices__list" aria-multiselectable="true"
                                                                role="listbox">
                                                                <div id="choices--9g7o-item-choice-1"
                                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                                    role="option" data-choice="" data-id="1"
                                                                    data-value="size" data-select-text=""
                                                                    data-choice-selectable="" aria-selected="false">4x6 in
                                                                </div>
                                                                <div id="choices--9g7o-item-choice-2"
                                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                                    role="option" data-choice="" data-id="2"
                                                                    data-value="color" data-select-text=""
                                                                    data-choice-selectable="" aria-selected="false">9x6 in
                                                                </div>
                                                                <div id="choices--9g7o-item-choice-3"
                                                                    class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                                    role="option" data-choice="" data-id="3"
                                                                    data-value="weight" data-select-text=""
                                                                    data-choice-selectable="" aria-selected="true">11x8 in
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="d-flex flex-wrap mb-2">
                                                <h5 class="text-body-highlight me-2">Option 2</h5><a class="fw-bold fs-9"
                                                    href="#!">Remove</a>
                                            </div><select class="form-select mb-3">
                                                <option value="size">Size</option>
                                                <option value="color">Color</option>
                                                <option value="weight">Weight</option>
                                                <option value="smell">Smell</option>
                                            </select>
                                            <div class="product-variant-select-menu mb-3">
                                                <div class="choices" data-type="select-multiple" role="combobox"
                                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                    <div class="choices__inner"><select
                                                            class="form-select mb-3 choices__input"
                                                            data-choices="data-choices" multiple="multiple"
                                                            data-options="{&quot;removeItemButton&quot;:true,&quot;placeholder&quot;:true}"
                                                            hidden="" tabindex="-1" data-choice="active"></select>
                                                        <div class="choices__list choices__list--multiple"></div><input
                                                            type="search" name="search_terms"
                                                            class="choices__input choices__input--cloned"
                                                            autocomplete="off" autocapitalize="off" spellcheck="false"
                                                            role="textbox" aria-autocomplete="list" aria-label="null">
                                                    </div>
                                                    <div class="choices__list choices__list--dropdown"
                                                        aria-expanded="false">
                                                        <div class="choices__list" aria-multiselectable="true"
                                                            role="listbox">
                                                            <div id="choices--09hg-item-choice-1"
                                                                class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                                role="option" data-choice="" data-id="1"
                                                                data-value="size" data-select-text=""
                                                                data-choice-selectable="" aria-selected="true">4x6 in
                                                            </div>
                                                            <div id="choices--09hg-item-choice-2"
                                                                class="choices__item choices__item--choice choices__item--selectable"
                                                                role="option" data-choice="" data-id="2"
                                                                data-value="color" data-select-text=""
                                                                data-choice-selectable="">9x6 in</div>
                                                            <div id="choices--09hg-item-choice-3"
                                                                class="choices__item choices__item--choice choices__item--selectable"
                                                                role="option" data-choice="" data-id="3"
                                                                data-value="weight" data-select-text=""
                                                                data-choice-selectable="">11x8 in</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><button class="btn btn-phoenix-primary w-100" type="button">Add another
                                        option</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for creating with Phoenix<span
                            class="d-none d-sm-inline-block"></span><span
                            class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none">2024 ©<a class="mx-1"
                            href="https://themewagon.com">Themewagon</a></p>
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85">v1.19.0</p>
                </div>
            </div>
        </footer>
    </div>
@endsection
