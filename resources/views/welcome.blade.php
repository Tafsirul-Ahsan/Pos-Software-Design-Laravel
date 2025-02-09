@extends('master',['title' => 'Your Title Goes Here'])
@section('homeContent')

    <div class="tw-flex">
        <script type="text/javascript">
        if (localStorage.getItem("upos_sidebar_collapse") == 'true') {
            var body = document.getElementsByTagName("body")[0];
            body.className += " sidebar-collapse";
        }

        </script>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="side-bar tw-relative tw-hidden tw-h-full tw-bg-white tw-w-64 xl:tw-w-64 lg:tw-flex lg:tw-flex-col tw-shrink-0">
            <!-- sidebar: style can be found in sidebar.less -->
            <a href="https://possolution.com.bd/home" class="tw-flex tw-items-center tw-justify-center tw-w-full tw-border-r tw-h-15 tw-bg-primary-800 tw-shrink-0 tw-border-primary-500/30">
                <p class="tw-text-lg tw-font-medium tw-text-white side-bar-heading tw-text-center">
                    CS <span class="tw-inline-block tw-w-3 tw-h-3 tw-bg-green-400 tw-rounded-full" title="Online"></span>
                </p>
            </a>
            <!-- Sidebar Menu -->
            <div class="tw-flex-1 tw-p-3 tw-space-y-3 tw-overflow-y-auto tw-border-r tw-border-gray-200" id="side-bar">
                <a href="https://possolution.com.bd/home" title="" class="tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100 tw-bg-gray-200 tw-text-primary-700"><svg xmlns="http://www.w3.org/2000/svg" class="tw-size-5 tw-shrink-0" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                        <path d="M10 12h4v4h-4z" />
                    </svg> <span class="tw-truncate">Home</span></a>
                <div class=""><a href="#" title="" class="drop_down tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100 focus:tw-text-gray-900 focus:tw-bg-gray-100"><svg aria-hidden="true" class="tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                        </svg> <span class="tw-truncate">User Management</span><svg aria-hidden="true" class="svg tw-ml-auto tw-text-gray-500 tw-size-4 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" /></svg></a>
                    <div class=" chiled tw-relative tw-mt-2 tw-mb-4 tw-pl-11" style="display:none">
                        <div class="tw-absolute tw-inset-y-0 tw-w-px tw-h-full tw-bg-gray-200 tw-left-5"></div>
                        <div class="tw-space-y-3.5"><a href="https://possolution.com.bd/users" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Users</span></a>
                            <a href="https://possolution.com.bd/roles" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Roles</span></a>
                            <a href="https://possolution.com.bd/sales-commission-agents" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Sales Commission Agents</span></a>
                        </div>
                    </div>
                </div>
                <div class=""><a href="#" title="" class="drop_down tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100 focus:tw-text-gray-900 focus:tw-bg-gray-100" id="tour_step4"><svg aria-hidden="true" class="tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z"></path>
                            <path d="M10 16h6"></path>
                            <path d="M13 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M4 8h3"></path>
                            <path d="M4 12h3"></path>
                            <path d="M4 16h3"></path>
                        </svg> <span class="tw-truncate">Contacts</span><svg aria-hidden="true" class="svg tw-ml-auto tw-text-gray-500 tw-size-4 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" /></svg></a>
                    <div class=" chiled tw-relative tw-mt-2 tw-mb-4 tw-pl-11" style="display:none">
                        <div class="tw-absolute tw-inset-y-0 tw-w-px tw-h-full tw-bg-gray-200 tw-left-5"></div>
                        <div class="tw-space-y-3.5"><a href="https://possolution.com.bd/contacts?type=supplier" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Suppliers</span></a>
                            <a href="https://possolution.com.bd/contacts?type=customer" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Customers</span></a>
                            <a href="https://possolution.com.bd/customer-group" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Customer Groups</span></a>
                            <a href="https://possolution.com.bd/contacts/import" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Import Contacts</span></a>
                        </div>
                    </div>
                </div>
                <div class=""><a href="#" title="" class="drop_down tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100 focus:tw-text-gray-900 focus:tw-bg-gray-100" id="tour_step5"><svg aria-hidden="true" class="tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5"></path>
                            <path d="M12 12l8 -4.5"></path>
                            <path d="M8.2 9.8l7.6 -4.6"></path>
                            <path d="M12 12v9"></path>
                            <path d="M12 12l-8 -4.5"></path>
                        </svg> <span class="tw-truncate">Products</span><svg aria-hidden="true" class="svg tw-ml-auto tw-text-gray-500 tw-size-4 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" /></svg></a>
                    <div class=" chiled tw-relative tw-mt-2 tw-mb-4 tw-pl-11" style="display:none">
                        <div class="tw-absolute tw-inset-y-0 tw-w-px tw-h-full tw-bg-gray-200 tw-left-5"></div>
                        <div class="tw-space-y-3.5"><a href="https://possolution.com.bd/products" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>List Products</span></a>
                            <a href="https://possolution.com.bd/products/create" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Add Product</span></a>
                            <a href="https://possolution.com.bd/update-product-price" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Update Price</span></a>
                            <a href="https://possolution.com.bd/labels/show" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Print Labels</span></a>
                            <a href="https://possolution.com.bd/variation-templates" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Variations</span></a>
                            <a href="https://possolution.com.bd/import-products" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Import Products</span></a>
                            <a href="https://possolution.com.bd/import-opening-stock" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Import Opening Stock</span></a>
                            <a href="https://possolution.com.bd/selling-price-group" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Selling Price Group</span></a>
                            <a href="https://possolution.com.bd/units" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Units</span></a>
                            <a href="https://possolution.com.bd/taxonomies?type=product" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Categories</span></a>
                            <a href="https://possolution.com.bd/brands" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Brands</span></a>
                            <a href="https://possolution.com.bd/warranties" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Warranties</span></a>
                        </div>
                    </div>
                </div>
                <a href="https://possolution.com.bd/manufacturing/recipe" title="" class="tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100" style=""><svg aria-hidden="true" class="tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 21h18"></path>
                        <path d="M5 21v-12l5 4v-4l5 4h4"></path>
                        <path d="M19 21v-8l-1.436 -9.574a.5 .5 0 0 0 -.495 -.426h-1.145a.5 .5 0 0 0 -.494 .418l-1.43 8.582"></path>
                        <path d="M9 17h1"></path>
                        <path d="M14 17h1"></path>
                    </svg> <span class="tw-truncate">Manufacturing</span></a>
                <a href="https://possolution.com.bd/repair/dashboard" title="" class="tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100" style="background-color:"><svg aria-hidden="true" class="tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5"></path>
                    </svg> <span class="tw-truncate">Repair</span></a>
                <div class=""><a href="#" title="" class="drop_down tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100 focus:tw-text-gray-900 focus:tw-bg-gray-100" id="tour_step6"><svg aria-hidden="true" class="tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 3v12"></path>
                            <path d="M16 11l-4 4l-4 -4"></path>
                            <path d="M3 12a9 9 0 0 0 18 0"></path>
                        </svg> <span class="tw-truncate">Purchases</span><svg aria-hidden="true" class="svg tw-ml-auto tw-text-gray-500 tw-size-4 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" /></svg></a>
                    <div class=" chiled tw-relative tw-mt-2 tw-mb-4 tw-pl-11" style="display:none">
                        <div class="tw-absolute tw-inset-y-0 tw-w-px tw-h-full tw-bg-gray-200 tw-left-5"></div>
                        <div class="tw-space-y-3.5"><a href="https://possolution.com.bd/purchases" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>List Purchases</span></a>
                            <a href="https://possolution.com.bd/purchases/create" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Add Purchase</span></a>
                            <a href="https://possolution.com.bd/purchase-return" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>List Purchase Return</span></a>
                        </div>
                    </div>
                </div>
                <div class=""><a href="#" title="" class="drop_down tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100 focus:tw-text-gray-900 focus:tw-bg-gray-100" id="tour_step7"><svg aria-hidden="true" class="tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 15v-12"></path>
                            <path d="M16 7l-4 -4l-4 4"></path>
                            <path d="M3 12a9 9 0 0 0 18 0"></path>
                        </svg> <span class="tw-truncate">Sell</span><svg aria-hidden="true" class="svg tw-ml-auto tw-text-gray-500 tw-size-4 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" /></svg></a>
                    <div class=" chiled tw-relative tw-mt-2 tw-mb-4 tw-pl-11" style="display:none">
                        <div class="tw-absolute tw-inset-y-0 tw-w-px tw-h-full tw-bg-gray-200 tw-left-5"></div>
                        <div class="tw-space-y-3.5"><a href="https://possolution.com.bd/sells" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>All sales</span></a>
                            <a href="https://possolution.com.bd/sells/create" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Add Sale</span></a>
                            <a href="https://possolution.com.bd/pos" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>List POS</span></a>
                            <a href="https://possolution.com.bd/pos/create" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>POS</span></a>
                            <a href="https://possolution.com.bd/sells/create?status=draft" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Add Draft</span></a>
                            <a href="https://possolution.com.bd/sells/drafts" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>List Drafts</span></a>
                            <a href="https://possolution.com.bd/sells/create?status=quotation" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Add Quotation</span></a>
                            <a href="https://possolution.com.bd/sells/quotations" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>List quotations</span></a>
                            <a href="https://possolution.com.bd/sell-return" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>List Sell Return</span></a>
                            <a href="https://possolution.com.bd/shipments" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Shipments</span></a>
                            <a href="https://possolution.com.bd/discount" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Discounts</span></a>
                            <a href="https://possolution.com.bd/import-sales" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Import Sales</span></a>
                        </div>
                    </div>
                </div>
                <div class=""><a href="#" title="" class="drop_down tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100 focus:tw-text-gray-900 focus:tw-bg-gray-100"><svg aria-hidden="true" class="tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                            <path d="M3 9l4 0"></path>
                        </svg> <span class="tw-truncate">Stock Transfers</span><svg aria-hidden="true" class="svg tw-ml-auto tw-text-gray-500 tw-size-4 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" /></svg></a>
                    <div class=" chiled tw-relative tw-mt-2 tw-mb-4 tw-pl-11" style="display:none">
                        <div class="tw-absolute tw-inset-y-0 tw-w-px tw-h-full tw-bg-gray-200 tw-left-5"></div>
                        <div class="tw-space-y-3.5"><a href="https://possolution.com.bd/stock-transfers" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>List Stock Transfers</span></a>
                            <a href="https://possolution.com.bd/stock-transfers/create" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Add Stock Transfer</span></a>
                        </div>
                    </div>
                </div>
                <div class=""><a href="#" title="" class="drop_down tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100 focus:tw-text-gray-900 focus:tw-bg-gray-100"><svg aria-hidden="true" class="tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 6m-8 0a8 3 0 1 0 16 0a8 3 0 1 0 -16 0"></path>
                            <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                            <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                        </svg> <span class="tw-truncate">Stock Adjustment</span><svg aria-hidden="true" class="svg tw-ml-auto tw-text-gray-500 tw-size-4 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" /></svg></a>
                    <div class=" chiled tw-relative tw-mt-2 tw-mb-4 tw-pl-11" style="display:none">
                        <div class="tw-absolute tw-inset-y-0 tw-w-px tw-h-full tw-bg-gray-200 tw-left-5"></div>
                        <div class="tw-space-y-3.5"><a href="https://possolution.com.bd/stock-adjustments" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>List Stock Adjustments</span></a>
                            <a href="https://possolution.com.bd/stock-adjustments/create" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Add Stock Adjustment</span></a>
                        </div>
                    </div>
                </div>
                <div class=""><a href="#" title="" class="drop_down tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100 focus:tw-text-gray-900 focus:tw-bg-gray-100"> <svg aria-hidden="true" class="tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2"></path>
                            <path d="M14.8 8a2 2 0 0 0 -1.8 -1h-2a2 2 0 1 0 0 4h2a2 2 0 1 1 0 4h-2a2 2 0 0 1 -1.8 -1"></path>
                            <path d="M12 6v10"></path>
                        </svg> <span class="tw-truncate">Expenses</span><svg aria-hidden="true" class="svg tw-ml-auto tw-text-gray-500 tw-size-4 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" /></svg></a>
                    <div class=" chiled tw-relative tw-mt-2 tw-mb-4 tw-pl-11" style="display:none">
                        <div class="tw-absolute tw-inset-y-0 tw-w-px tw-h-full tw-bg-gray-200 tw-left-5"></div>
                        <div class="tw-space-y-3.5"><a href="https://possolution.com.bd/expenses" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>List Expenses</span></a>
                            <a href="https://possolution.com.bd/expenses/create" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Add Expense</span></a>
                            <a href="https://possolution.com.bd/expense-categories" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Expense Categories</span></a>
                        </div>
                    </div>
                </div>
                <a href="https://possolution.com.bd/accounting/dashboard" title="" class="tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100" style=""><svg aria-hidden="true" class="tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 21l18 0"></path>
                        <path d="M3 10l18 0"></path>
                        <path d="M5 6l7 -3l7 3"></path>
                        <path d="M4 10l0 11"></path>
                        <path d="M20 10l0 11"></path>
                        <path d="M8 14l0 3"></path>
                        <path d="M12 14l0 3"></path>
                        <path d="M16 14l0 3"></path>
                    </svg> <span class="tw-truncate">Accounting</span></a>
                <a href="https://possolution.com.bd/hms/dashboard" title="" class="tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100" style=""><svg xmlns="http://www.w3.org/2000/svg" class="tw-size-5 tw-shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M19.072 21h-14.144a1.928 1.928 0 0 1 -1.928 -1.928v-6.857c0 -.512 .203 -1 .566 -1.365l7.07 -7.063a1.928 1.928 0 0 1 2.727 0l7.071 7.063c.363 .362 .566 .853 .566 1.365v6.857a1.928 1.928 0 0 1 -1.928 1.928z" />
                        <path d="M7 13v4h10v-4l-5 -5" />
                        <path d="M14.8 5.2l-11.8 11.8" />
                        <path d="M7 17v4" />
                        <path d="M17 17v4" />
                    </svg> <span class="tw-truncate">HMS</span></a>
                <div class=""><a href="#" title="" class="drop_down tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100 focus:tw-text-gray-900 focus:tw-bg-gray-100" id="tour_step8"><svg aria-hidden="true" class="tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M8 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h5.697"></path>
                            <path d="M18 14v4h4"></path>
                            <path d="M18 11v-4a2 2 0 0 0 -2 -2h-2"></path>
                            <path d="M8 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
                            <path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                            <path d="M8 11h4"></path>
                            <path d="M8 15h3"></path>
                        </svg> <span class="tw-truncate">Reports</span><svg aria-hidden="true" class="svg tw-ml-auto tw-text-gray-500 tw-size-4 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" /></svg></a>
                    <div class=" chiled tw-relative tw-mt-2 tw-mb-4 tw-pl-11" style="display:none">
                        <div class="tw-absolute tw-inset-y-0 tw-w-px tw-h-full tw-bg-gray-200 tw-left-5"></div>
                        <div class="tw-space-y-3.5"><a href="https://possolution.com.bd/reports/profit-loss" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Profit / Loss Report</span></a>
                            <a href="https://possolution.com.bd/reports/purchase-sell" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Purchase & Sale</span></a>
                            <a href="https://possolution.com.bd/reports/tax-report" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Tax Report</span></a>
                            <a href="https://possolution.com.bd/reports/customer-supplier" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Supplier & Customer Report</span></a>
                            <a href="https://possolution.com.bd/reports/customer-group" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Customer Groups Report</span></a>
                            <a href="https://possolution.com.bd/reports/stock-report" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Stock Report</span></a>
                            <a href="https://possolution.com.bd/reports/stock-adjustment-report" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Stock Adjustment Report</span></a>
                            <a href="https://possolution.com.bd/reports/trending-products" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Trending Products</span></a>
                            <a href="https://possolution.com.bd/reports/items-report" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Items Report</span></a>
                            <a href="https://possolution.com.bd/reports/product-purchase-report" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Product Purchase Report</span></a>
                            <a href="https://possolution.com.bd/reports/product-sell-report" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Product Sell Report</span></a>
                            <a href="https://possolution.com.bd/reports/purchase-payment-report" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Purchase Payment Report</span></a>
                            <a href="https://possolution.com.bd/reports/sell-payment-report" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Sell Payment Report</span></a>
                            <a href="https://possolution.com.bd/reports/expense-report" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Expense Report</span></a>
                            <a href="https://possolution.com.bd/reports/register-report" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Register Report</span></a>
                            <a href="https://possolution.com.bd/reports/sales-representative-report" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Sales Representative Report</span></a>
                            <a href="https://possolution.com.bd/reports/activity-log" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Activity Log</span></a>
                        </div>
                    </div>
                </div>
                <a href="https://possolution.com.bd/notification-templates" title="" class="tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100"><svg aria-hidden="true" class="tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path>
                        <path d="M3 7l9 6l9 -6"></path>
                    </svg> <span class="tw-truncate">Notification Templates</span></a>
                <div class=""><a href="#" title="" class="drop_down tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100 focus:tw-text-gray-900 focus:tw-bg-gray-100" id="tour_step3"><svg aria-hidden="true" class="tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                        </svg> <span class="tw-truncate">Settings</span><svg aria-hidden="true" class="svg tw-ml-auto tw-text-gray-500 tw-size-4 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" /></svg></a>
                    <div class=" chiled tw-relative tw-mt-2 tw-mb-4 tw-pl-11" style="display:none">
                        <div class="tw-absolute tw-inset-y-0 tw-w-px tw-h-full tw-bg-gray-200 tw-left-5"></div>
                        <div class="tw-space-y-3.5"><a href="https://possolution.com.bd/business/settings" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " " id=" tour_step2""> <span>Business Settings</span></a>
                            <a href="https://possolution.com.bd/business-location" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Business Locations</span></a>
                            <a href="https://possolution.com.bd/invoice-schemes" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Invoice Settings</span></a>
                            <a href="https://possolution.com.bd/barcodes" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Barcode Settings</span></a>
                            <a href="https://possolution.com.bd/printers" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Receipt Printers</span></a>
                            <a href="https://possolution.com.bd/tax-rates" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Tax Rates</span></a>
                            <a href="https://possolution.com.bd/subscription" title="" class="tw-flex tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-truncate tw-transition-all tw-duration-200 hover:tw-text-gray-900 tw-whitespace-nowrap " ""> <span>Package Subscription</span></a>
                        </div>
                    </div>
                </div>
                <a href="https://possolution.com.bd/crm/dashboard" title="" class="tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100" style=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-building-broadcast-tower">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path d="M16.616 13.924a5 5 0 1 0 -9.23 0" />
                        <path d="M20.307 15.469a9 9 0 1 0 -16.615 0" />
                        <path d="M9 21l3 -9l3 9" />
                        <path d="M10 19h4" /></svg> <span class="tw-truncate">CRM</span></a>
                <a href="https://possolution.com.bd/hrm/dashboard" title="" class="tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100" style=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users-group">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                        <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                        <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                        <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                        <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                        <path d="M3 13v-1a2 2 0 0 1 2 -2h2" /></svg> <span class="tw-truncate">HRM</span></a>
                <a href="https://possolution.com.bd/essentials/todo" title="" class="tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100" style=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M9 12l2 2l4 -4" /></svg> <span class="tw-truncate">Essentials</span></a>
                <a href="https://possolution.com.bd/product-catalogue/catalogue-qr" title="" class="tw-flex tw-items-center tw-gap-3 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-tracking-tight tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg tw-whitespace-nowrap hover:tw-text-gray-900 hover:tw-bg-gray-100" style=""><i class="fa fas fa-qrcode"></i> <span class="tw-truncate">Catalogue QR</span></a>
            </div>
            <!-- /.sidebar-menu -->
            <!-- /.sidebar -->
        </aside>
        <!-- Add currency related field-->
        <input type="hidden" id="__code" value="BDT">
        <input type="hidden" id="__symbol" value="৳">
        <input type="hidden" id="__thousand" value=",">
        <input type="hidden" id="__decimal" value=".">
        <input type="hidden" id="__symbol_placement" value="before">
        <input type="hidden" id="__precision" value="2">
        <input type="hidden" id="__quantity_precision" value="2">
        <!-- End of currency related field-->
        <input type="hidden" id="view_export_buttons">
        <main class="tw-flex tw-flex-col tw-flex-1 tw-h-full tw-min-w-0 tw-bg-gray-100">
            <!-- Main Header -->
            <div class="  tw-transition-all tw-duration-5000 tw-border-b tw-bg-gradient-to-r tw-from-primary-800 tw-to-primary-900 tw-shrink-0 lg:tw-h-15 tw-border-primary-500/30 no-print">
                <div class="tw-px-3 tw-py-3">
                    <div class="tw-flex tw-items-start tw-justify-between tw-gap-3 lg:tw-items-center">
                        <div class="tw-flex tw-items-center tw-gap-3">
                            <button type="button" class="small-view-button xl:tw-w-20 lg:tw-hidden tw-inline-flex tw-items-center tw-justify-center tw-text-sm tw-font-medium tw-text-white tw-transition-all tw-duration-200 tw-bg-primary-800 hover:tw-bg-primary-700 tw-p-1.5 tw-rounded-lg tw-ring-1 hover:tw-text-white tw-ring-white/10">
                                <span class="tw-sr-only">
                                    Sidebar Menu
                                </span>
                                <svg aria-hidden="true" class="tw-size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 6l16 0" />
                                    <path d="M4 12l16 0" />
                                    <path d="M4 18l16 0" />
                                </svg>
                            </button>
                            <button type="button" class="side-bar-collapse tw-hidden lg:tw-inline-flex tw-items-center tw-justify-center tw-text-sm tw-font-medium tw-text-white tw-transition-all tw-duration-200 tw-bg-primary-800 hover:tw-bg-primary-700 tw-p-1.5 tw-rounded-lg tw-ring-1 hover:tw-text-white tw-ring-white/10">
                                <span class="tw-sr-only">
                                    Collapse Sidebar
                                </span>
                                <svg aria-hidden="true" class="tw-size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                    <path d="M15 4v16" />
                                    <path d="M10 10l-2 2l2 2" />
                                </svg>
                            </button>
                        </div>
                        <i class="fas fa-info-circle pull-left cursor-pointer" style="color:white" aria-hidden="true" data-toggle="popover" data-html="true" title="Active Package Details" data-placement="right" data-trigger="hover" data-content="
    <table class='table table-condensed'>
     <tr class='text-center'> 
        <td colspan='2'>
            Free For 7 Day
        </td>
     </tr>
     <tr class='text-center'>
        <td colspan='2'>
            12/07/2024 - 12/14/2024
        </td>
     </tr>
     <tr> 
        <td colspan='2'>
            <i class='fa fa-check text-success'></i>
                            1
            
            Business Locations        </td>
     </tr>
     <tr>
        <td colspan='2'>
            <i class='fa fa-check text-success'></i>
                            1
            
            Users        </td>
     <tr>
     <tr>
        <td colspan='2'>
            <i class='fa fa-check text-success'></i>
                            10
            
            Products        </td>
     </tr>
     <tr>
        <td colspan='2'>
            <i class='fa fa-check text-success'></i>
                            20
            
            Invoices        </td>
     </tr>
     
    </table>                     
">
                        </i>
                        <div class="tw-flex tw-flex-wrap tw-items-center tw-justify-end tw-gap-3">
                            <button type="button" data-type="clock_in" data-toggle="tooltip" data-placement="bottom" title="Clock In" class=" clock_in_btn  tw-inline-flex tw-items-center tw-justify-center tw-text-sm tw-font-medium tw-text-white tw-transition-all tw-duration-200 tw-bg-primary-800 hover:tw-bg-primary-700 tw-p-1.5 tw-rounded-lg tw-ring-1 hover:tw-text-white tw-ring-white/10">
                                <span class="tw-sr-only">
                                    Clock In
                                </span>
                                <svg aria-hidden="true" class="tw-size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                    <path d="M7 11l5 5l5 -5" />
                                    <path d="M12 4l0 12" />
                                </svg>
                            </button>
                            <button type="button" class=" hide  clock_out_btn tw-inline-flex tw-items-center tw-justify-center tw-text-sm tw-font-medium tw-text-white tw-transition-all tw-duration-200 tw-bg-primary-800 hover:tw-bg-primary-700 tw-p-1.5 tw-rounded-lg tw-ring-1 tw-ring-white/10 hover:tw-text-white" data-type="clock_out" data-toggle="tooltip" data-placement="bottom" data-html="true" title="Clock Out ">
                                <span class="tw-sr-only">
                                    Clock In
                                </span>
                                <svg aria-hidden="true" class="tw-size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                    <path d="M7 11l5 5l5 -5" />
                                    <path d="M12 4l0 12" />
                                </svg>
                            </button>
                            <details class="tw-dw-dropdown tw-relative tw-inline-block tw-text-left">
                                <summary class="tw-inline-flex tw-transition-all tw-ring-1 tw-ring-white/10 hover:tw-text-white tw-cursor-pointer tw-duration-200 tw-bg-primary-800 hover:tw-bg-primary-700 tw-py-1.5 tw-px-3 tw-rounded-lg tw-items-center tw-justify-center tw-text-sm tw-font-medium tw-text-white tw-gap-1">
                                    <svg aria-hidden="true" class="tw-size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                        <path d="M9 12h6" />
                                        <path d="M12 9v6" />
                                    </svg>
                                </summary>
                                <ul class="tw-dw-menu tw-dw-dropdown-content tw-dw-z-[1] tw-dw-bg-base-100 tw-dw-rounded-box tw-w-48 tw-absolute tw-left-0 tw-z-10 tw-mt-2 tw-origin-top-right tw-bg-white tw-rounded-lg tw-shadow-lg tw-ring-1 tw-ring-gray-200 focus:tw-outline-none" role="menu" tabindex="-1">
                                    <div class="tw-p-2" role="none">
                                        <a href="https://possolution.com.bd/calendar" class="tw-flex tw-items-center tw-gap-2 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg hover:tw-text-gray-900 hover:tw-bg-gray-100" role="menuitem" tabindex="-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <rect x="4" y="5" width="16" height="16" rx="2" />
                                                <line x1="16" y1="3" x2="16" y2="7" />
                                                <line x1="8" y1="3" x2="8" y2="7" />
                                                <line x1="4" y1="11" x2="20" y2="11" />
                                                <line x1="11" y1="15" x2="12" y2="15" />
                                                <line x1="12" y1="15" x2="12" y2="18" />
                                            </svg>
                                            Calendar </a>
                                        <a href="#" data-href="https://possolution.com.bd/essentials/todo/create" data-container="#task_modal" class="btn-modal tw-flex tw-items-center tw-gap-2 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg hover:tw-text-gray-900 hover:tw-bg-gray-100" role="menuitem" tabindex="-1">
                                            <svg aria-hidden="true" class="tw-w-5 tw-h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                                <path d="M9 12l2 2l4 -4" />
                                            </svg>
                                            Add To Do </a>
                                        <a href="#" id="start_tour" class="tw-flex tw-items-center tw-gap-2 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg hover:tw-text-gray-900 hover:tw-bg-gray-100" role="menuitem" tabindex="-1">
                                            <svg aria-hidden="true" class="tw-w-5 tw-h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                                <path d="M12 17l0 .01" />
                                                <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" />
                                            </svg>
                                            Application Tour
                                        </a>
                                    </div>
                                </ul>
                            </details>
                            <button id="btnCalculator" title="Calculator" data-content='<div id="calculator">
  <div class="row text-center" id="calc">
    <div class="calcBG col-md-12 text-center">
      <div class="row" id="result">
        <form name="calc">
          <input type="text" class="screen text-right" name="result" readonly>
        </form>
      </div>
      <div class="row">
        <button id="allClear" type="button" class="btn btn-danger" onclick="clearScreen()">AC</button>
        <button id="clear" type="button" class="btn btn-warning" onclick="clearScreen()">CE</button>
        <button id="%" type="button" class="btn" onclick="calEnterVal(this.id)">%</button>
        <button id="/" type="button" class="btn" onclick="calEnterVal(this.id)">÷</button>
      </div>
      <div class="row">
        <button id="7" type="button" class="btn" onclick="calEnterVal(this.id)">7</button>
        <button id="8" type="button" class="btn" onclick="calEnterVal(this.id)">8</button>
        <button id="9" type="button" class="btn" onclick="calEnterVal(this.id)">9</button>
        <button id="*" type="button" class="btn" onclick="calEnterVal(this.id)">x</button>
      </div>
      <div class="row">
        <button id="4" type="button" class="btn" onclick="calEnterVal(this.id)">4</button>
        <button id="5" type="button" class="btn" onclick="calEnterVal(this.id)">5</button>
        <button id="6" type="button" class="btn" onclick="calEnterVal(this.id)">6</button>
        <button id="-" type="button" class="btn" onclick="calEnterVal(this.id)">-</button>
      </div>
      <div class="row">
        <button id="1" type="button" class="btn" onclick="calEnterVal(this.id)">1</button>
        <button id="2" type="button" class="btn" onclick="calEnterVal(this.id)">2</button>
        <button id="3" type="button" class="btn" onclick="calEnterVal(this.id)">3</button>
        <button id="+" type="button" class="btn" onclick="calEnterVal(this.id)">+</button>
      </div>
      <div class="row">
        <button id="0" type="button" class="btn" onclick="calEnterVal(this.id)">0</button>
        <button id="." type="button" class="btn" onclick="calEnterVal(this.id)">.</button>
        <button id="equals" type="button" class="btn btn-success" onclick="calculate()">=</button>
        <button id="blank" type="button" class="btn">&nbsp;</button>
      </div>
    </div>
  </div>
</div>' type="button" data-trigger="click" data-html="true" data-placement="bottom" class="tw-hidden md:tw-inline-flex tw-items-center tw-justify-center tw-text-sm tw-font-medium tw-text-white tw-transition-all tw-duration-200 tw-bg-primary-800 hover:tw-bg-primary-700 tw-p-1.5 tw-rounded-lg tw-ring-1 hover:tw-text-white tw-ring-white/10">
                                <span class="tw-sr-only" aria-hidden="true">
                                    Calculator
                                </span>
                                <svg aria-hidden="true" class="tw-size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 3m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                    <path d="M8 7m0 1a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-6a1 1 0 0 1 -1 -1z" />
                                    <path d="M8 14l0 .01" />
                                    <path d="M12 14l0 .01" />
                                    <path d="M16 14l0 .01" />
                                    <path d="M8 17l0 .01" />
                                    <path d="M12 17l0 .01" />
                                    <path d="M16 17l0 .01" />
                                </svg>
                            </button>
                            <a href="https://possolution.com.bd/pos/create" class="sm:tw-inline-flex tw-transition-all tw-duration-200 tw-gap-2 tw-bg-primary-800 hover:tw-bg-primary-700 tw-py-1.5 tw-px-3 tw-rounded-lg tw-items-center tw-justify-center tw-text-sm tw-font-medium tw-ring-1 tw-ring-white/10 hover:tw-text-white tw-text-white">
                                <svg aria-hidden="true" class="tw-size-5 tw-hidden md:tw-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                    <path d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                    <path d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                    <path d="M14 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                </svg>
                                POS </a>
                            <a href="https://possolution.com.bd/pos/create?sub_type=repair" title="Add Repair" data-toggle="tooltip" data-placement="bottom" class="tw-hidden sm:tw-inline-flex tw-transition-all tw-duration-200 tw-gap-2 tw-bg-primary-800 hover:tw-bg-primary-700 tw-py-1.5 tw-px-3 tw-rounded-lg tw-items-center tw-justify-center tw-text-sm tw-font-medium tw-ring-1 tw-ring-white/10 tw-text-white hover:tw-text-white">
                                <svg aria-hidden="true" class="tw-size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5">
                                    </path>
                                </svg>
                                Repair </a>
                            <button type="button" type="button" id="view_todays_profit" title="Today&#039;s profit" data-toggle="tooltip" data-placement="bottom" class="tw-hidden sm:tw-inline-flex tw-items-center tw-ring-1 tw-ring-white/10 tw-justify-center tw-text-sm tw-font-medium tw-text-white hover:tw-text-white tw-transition-all tw-duration-200 tw-bg-primary-800 hover:tw-bg-primary-700 tw-p-1.5 tw-rounded-lg">
                                <span class="tw-sr-only">
                                    Today's Profit
                                </span>
                                <svg aria-hidden="true" class="tw-size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                    <path d="M3 6m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M18 12l.01 0" />
                                    <path d="M6 12l.01 0" />
                                </svg>
                            </button>
                            <button type="button" class="tw-hidden lg:tw-inline-flex tw-transition-all tw-ring-1 tw-ring-white/10 tw-duration-200 tw-bg-primary-800 hover:tw-bg-primary-700 tw-py-1.5 tw-px-3 tw-rounded-lg tw-items-center tw-justify-center tw-text-sm tw-font-medium tw-text-white hover:tw-text-white tw-font-mono">
                                12/07/2024
                            </button>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu tw-list-none">
                                <a type="button" class="dropdown-toggle load_notifications tw-inline-flex tw-items-center tw-ring-1 tw-ring-white/10 tw-justify-center tw-text-sm tw-font-medium tw-text-white hover:tw-text-white tw-transition-all tw-duration-200 tw-bg-primary-800 hover:tw-bg-primary-700 tw-p-1.5 tw-rounded-lg" data-toggle="dropdown" id="show_unread_notifications" data-loaded="false">
                                    <span class="tw-sr-only">
                                        Notifications
                                    </span>
                                    <svg aria-hidden="true" class="tw-size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                        <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                    </svg>
                                    <span class="label label-warning notifications_count"></span>
                                </a>
                                <ul class="dropdown-menu !tw-p-2 !tw-w-80 tw-absolute !tw-right-0 !tw-z-10 !tw-mt-2 !tw-origin-top-right !tw-bg-white !tw-rounded-lg !tw-shadow-lg !tw-ring-1 !tw-ring-gray-200 !focus:tw-outline-none" style="left: auto !important ; height:90vh; overflow-y: scroll;">
                                    <!-- <li class="header">You have 10 unread notifications</li> -->
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu" id="notifications_list">
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <input type="hidden" id="notification_page" value="1">
                            <details class="tw-dw-dropdown tw-relative tw-inline-block tw-text-left">
                                <summary data-toggle="popover" class="tw-dw-m-1 tw-inline-flex tw-transition-all tw-ring-1 tw-ring-white/10 tw-cursor-pointer tw-duration-200 tw-bg-primary-800 hover:tw-bg-primary-700 tw-py-1.5 tw-px-3 tw-rounded-lg tw-items-center tw-justify-center tw-text-sm tw-font-medium tw-text-white hover:tw-text-white tw-gap-1">
                                    <span class="tw-hidden md:tw-block">CS </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tw-size-5">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                        <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" /></svg>
                                </summary>
                                <ul class="tw-p-2 tw-w-48 tw-absolute tw-right-0 tw-z-10 tw-mt-2 tw-origin-top-right tw-bg-white tw-rounded-lg tw-shadow-lg tw-ring-1 tw-ring-gray-200 focus:tw-outline-none" role="menu" tabindex="-1">
                                    <div class="tw-px-4 tw-pt-3 tw-pb-1" role="none">
                                        <p class="tw-text-sm" role="none">
                                            Signed in as
                                        </p>
                                        <p class="tw-text-sm tw-font-medium tw-text-gray-900 tw-truncate" role="none">
                                            CS
                                        </p>
                                    </div>
                                    <li>
                                        <a href="https://possolution.com.bd/user/profile" class="tw-flex tw-items-center tw-gap-2 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg hover:tw-text-gray-900 hover:tw-bg-gray-100" role="menuitem" tabindex="-1">
                                            <svg aria-hidden="true" class="tw-w-5 tw-h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                                <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                            </svg>
                                            Profile </a>
                                    </li>
                                    <li><div class="tw-flex tw-items-center tw-gap-2 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-text-gray-600 tw-transition-all tw-duration-200 tw-rounded-lg hover:tw-text-gray-900 hover:tw-bg-gray-100" aria-labelledby="navbarDropdown"><i class="fa fa-sign-out" style="font-size:21px"></i>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                   
                                        
                                    </li>
                                </ul>
                            </details>
                        </div>
                    </div>
                </div>
            </div>
            <!-- empty div for vuejs -->
            <div id="app">
            </div>
            <div class="tw-flex-1 tw-overflow-y-auto tw-h-screen" id="scrollable-container">
                <div class="tw-pb-6 tw-bg-gradient-to-r tw-from-primary-800 tw-to-primary-900 xl:tw-pb-0 ">
                    <div class="tw-px-5 tw-pt-3">
                        <div class="sm:tw-flex sm:tw-items-center sm:tw-justify-between sm:tw-gap-12">
                            <div class="tw-mt-2 sm:tw-w-1/2 md:tw-w-1/2">
                                <h1 class="tw-text-2xl md:tw-text-4xl tw-tracking-tight tw-text-primary-800 tw-font-semibold text-white tw-mb-10 md:tw-mb-0">
                                    Welcome CS, 👋
                                </h1>
                            </div>
                            <div class="tw-mt-2 sm:tw-w-1/3 md:tw-w-1/4 ">
                            </div>
                            <div class="tw-mt-2 sm:tw-w-1/3 md:tw-w-1/4 tw-text-right">
                                <button type="button" id="dashboard_date_filter" class="tw-inline-flex tw-items-center tw-justify-center tw-w-full tw-gap-1 tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-text-gray-900 tw-transition-all tw-duration-200 tw-bg-white tw-rounded-lg sm:tw-w-auto hover:tw-bg-primary-50">
                                    <svg aria-hidden="true" class="tw-size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                                        <path d="M16 3v4" />
                                        <path d="M8 3v4" />
                                        <path d="M4 11h16" />
                                        <path d="M7 14h.013" />
                                        <path d="M10.01 14h.005" />
                                        <path d="M13.01 14h.005" />
                                        <path d="M16.015 14h.005" />
                                        <path d="M13.015 17h.005" />
                                        <path d="M7.01 17h.005" />
                                        <path d="M10.01 17h.005" />
                                    </svg>
                                    <span>
                                        Filter by date
                                    </span>
                                    <svg aria-hidden="true" class="tw-size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M6 9l6 6l6 -6" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="tw-grid tw-grid-cols-1 tw-gap-4 tw-mt-6 sm:tw-grid-cols-2 xl:tw-grid-cols-4 sm:tw-gap-5">
                            <div class="tw-transition-all tw-duration-200 tw-bg-white tw-shadow-sm hover:tw-shadow-md tw-rounded-xl hover:tw-translate-y-0.5 tw-ring-1 tw-ring-gray-200">
                                <div class="tw-p-4 sm:tw-p-5">
                                    <div class="tw-flex tw-items-center tw-gap-4">
                                        <div class="tw-inline-flex tw-items-center tw-justify-center tw-w-10 tw-h-10 tw-rounded-full sm:tw-w-12 sm:tw-h-12 tw-shrink-0 tw-bg-sky-100 tw-text-sky-500">
                                            <svg aria-hidden="true" class="tw-w-6 tw-h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                <path d="M17 17h-11v-14h-2" />
                                                <path d="M6 5l14 1l-1 7h-13" />
                                            </svg>
                                        </div>
                                        <div class="tw-flex-1 tw-min-w-0">
                                            <p class="tw-text-sm tw-font-medium tw-text-gray-500 tw-truncate tw-whitespace-nowrap">
                                                Total Sales
                                            </p>
                                            <p class="total_sell tw-mt-0.5 tw-text-gray-900 tw-text-xl tw-truncate tw-font-semibold tw-tracking-tight tw-font-mono">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-transition-all tw-duration-200 tw-bg-white tw-shadow-sm hover:tw-shadow-md tw-rounded-xl hover:tw--translate-y-0.5 tw-ring-1 tw-ring-gray-200">
                                <div class="tw-p-4 sm:tw-p-5">
                                    <div class="tw-flex tw-items-center tw-gap-4">
                                        <div class="tw-inline-flex tw-items-center tw-justify-center tw-w-10 tw-h-10 tw-text-green-500 tw-bg-green-100 tw-rounded-full sm:tw-w-12 sm:tw-h-12 tw-shrink-0">
                                            <svg aria-hidden="true" class="tw-w-6 tw-h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2">
                                                </path>
                                                <path d="M14.8 8a2 2 0 0 0 -1.8 -1h-2a2 2 0 1 0 0 4h2a2 2 0 1 1 0 4h-2a2 2 0 0 1 -1.8 -1">
                                                </path>
                                                <path d="M12 6v10"></path>
                                            </svg>
                                        </div>
                                        <div class="tw-flex-1 tw-min-w-0">
                                            <p class="tw-text-sm tw-font-medium tw-text-gray-500 tw-truncate tw-whitespace-nowrap">
                                                Net <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="NET = TOTAL SALES - INVOICE DUE - EXPENSE" data-html="true" data-trigger="hover"></i> </p>
                                            <p class="net tw-mt-0.5 tw-text-gray-900 tw-text-xl tw-truncate tw-font-semibold tw-tracking-tight tw-font-mono">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-transition-all tw-duration-200 tw-bg-white tw-shadow-sm hover:tw-shadow-md tw-rounded-xl hover:tw--translate-y-0.5 tw-ring-1 tw-ring-gray-200">
                                <div class="tw-p-4 sm:tw-p-5">
                                    <div class="tw-flex tw-items-center tw-gap-4">
                                        <div class="tw-inline-flex tw-items-center tw-justify-center tw-w-10 tw-h-10 tw-text-yellow-500 tw-bg-yellow-100 tw-rounded-full sm:tw-w-12 sm:tw-h-12 shrink-0">
                                            <svg aria-hidden="true" class="tw-w-6 tw-h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                                <path d="M9 7l1 0" />
                                                <path d="M9 13l6 0" />
                                                <path d="M13 17l2 0" />
                                            </svg>
                                        </div>
                                        <div class="tw-flex-1 tw-min-w-0">
                                            <p class="tw-text-sm tw-font-medium tw-text-gray-500 tw-truncate tw-whitespace-nowrap">
                                                Invoice due
                                            </p>
                                            <p class="invoice_due tw-mt-0.5 tw-text-gray-900 tw-text-xl tw-truncate tw-font-semibold tw-tracking-tight tw-font-mono">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-transition-all tw-duration-200 tw-bg-white tw-shadow-sm hover:tw-shadow-md tw-rounded-xl hover:tw--translate-y-0.5 tw-ring-1 tw-ring-gray-200">
                                <div class="tw-p-4 sm:tw-p-5">
                                    <div class="tw-flex tw-items-center tw-gap-4">
                                        <div class="tw-inline-flex tw-items-center tw-justify-center tw-w-10 tw-h-10 tw-text-red-500 tw-bg-red-100 tw-rounded-full sm:tw-w-12 sm:tw-h-12 shrink-0">
                                            <svg aria-hidden="true" class="tw-w-6 tw-h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M21 7l-18 0" />
                                                <path d="M18 10l3 -3l-3 -3" />
                                                <path d="M6 20l-3 -3l3 -3" />
                                                <path d="M3 17l18 0" />
                                            </svg>
                                        </div>
                                        <div class="tw-flex-1 tw-min-w-0">
                                            <p class="tw-text-sm tw-font-medium tw-text-gray-500 tw-truncate tw-whitespace-nowrap">
                                                Total Sell Return
                                                <i class="fa fa-info-circle text-info hover-q no-print" aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" id="total_srp" data-value="Total Sell Return-Total Sell Return Paid" data-content="" data-html="true" data-trigger="hover"></i>
                                            </p>
                                            <p class="total_sell_return tw-mt-0.5 tw-text-gray-900 tw-text-xl tw-truncate tw-font-semibold tw-tracking-tight tw-font-mono">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tw-relative">
                        <div class="tw-absolute tw-inset-0 tw-grid" aria-hidden="true">
                            <div class="tw-bg-gradient-to-r tw-from-primary-800 tw-to-primary-900"></div>
                            <div class="tw-bg-gradient-to-r tw-from-primary-800 tw-to-primary-900 xl:tw-bg-none xl:tw-bg-gray-100">
                            </div>
                        </div>
                        <div class="tw-px-5 tw-isolate">
                            <div class="tw-grid tw-grid-cols-1 tw-gap-4 tw-mt-4 sm:tw-mt-6 sm:tw-grid-cols-2 xl:tw-grid-cols-4 sm:tw-gap-5">
                                <div class="tw-transition-all tw-duration-200 tw-bg-white tw-shadow-sm tw-rounded-xl hover:tw-shadow-md hover:tw--translate-y-0.5 tw-ring-1 tw-ring-gray-200">
                                    <div class="tw-p-4 sm:tw-p-5">
                                        <div class="tw-flex tw-items-center tw-gap-4">
                                            <div class="tw-inline-flex tw-items-center tw-justify-center tw-w-10 tw-h-10 tw-rounded-full sm:tw-w-12 sm:tw-h-12 shrink-0 bg-sky-100 tw-text-sky-500">
                                                <svg aria-hidden="true" class="tw-w-6 tw-h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 3v12"></path>
                                                    <path d="M16 11l-4 4l-4 -4"></path>
                                                    <path d="M3 12a9 9 0 0 0 18 0"></path>
                                                </svg>
                                            </div>
                                            <div class="tw-flex-1 tw-min-w-0">
                                                <p class="tw-text-sm tw-font-medium tw-text-gray-500 tw-truncate tw-whitespace-nowrap">
                                                    Total purchase
                                                </p>
                                                <p class="total_purchase tw-mt-0.5 tw-text-gray-900 tw-text-xl tw-truncate tw-font-semibold tw-tracking-tight tw-font-mono">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tw-transition-all tw-duration-200 tw-bg-white tw-shadow-sm tw-rounded-xl hover:tw-shadow-md hover:tw--translate-y-0.5 tw-ring-1 tw-ring-gray-200">
                                    <div class="tw-p-4 sm:tw-p-5">
                                        <div class="tw-flex tw-items-center tw-gap-4">
                                            <div class="tw-inline-flex tw-items-center tw-justify-center tw-w-10 tw-h-10 tw-text-yellow-500 tw-bg-yellow-100 tw-rounded-full sm:tw-w-12 sm:tw-h-12 shrink-0">
                                                <svg aria-hidden="true" class="tw-w-6 tw-h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M12 9v4" />
                                                    <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
                                                    <path d="M12 16h.01" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="tw-text-sm tw-font-medium tw-text-gray-500">
                                                    Purchase due
                                                </p>
                                                <p class="purchase_due tw-mt-0.5 tw-text-gray-900 tw-text-xl tw-truncate tw-font-semibold tw-tracking-tight tw-font-mono">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tw-transition-all tw-duration-200 tw-bg-white tw-shadow-sm tw-rounded-xl hover:tw-shadow-md hover:tw--translate-y-0.5 tw-ring-1 tw-ring-gray-200">
                                    <div class="tw-p-4 sm:tw-p-5">
                                        <div class="tw-flex tw-items-center tw-gap-4">
                                            <div class="tw-inline-flex tw-items-center tw-justify-center tw-w-10 tw-h-10 tw-text-red-500 tw-bg-red-100 tw-rounded-full sm:tw-w-12 sm:tw-h-12 shrink-0">
                                                <svg aria-hidden="true" class="tw-w-6 tw-h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />
                                                    <path d="M15 14v-2a2 2 0 0 0 -2 -2h-4l2 -2m0 4l-2 -2" />
                                                </svg>
                                            </div>
                                            <div class="tw-flex-1 tw-min-w-0">
                                                <p class="tw-text-sm tw-font-medium tw-text-gray-500 tw-truncate tw-whitespace-nowrap">
                                                    Total Purchase Return
                                                    <i class="fa fa-info-circle text-info hover-q no-print" aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" id="total_prp" data-value="Total Purchase Return-Total Purchase Return Paid" data-content="" data-html="true" data-trigger="hover"></i>
                                                </p>
                                                <p class="total_purchase_return tw-mt-0.5 tw-text-gray-900 tw-text-xl tw-truncate tw-font-semibold tw-tracking-tight tw-font-mono">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tw-transition-all tw-duration-200 tw-bg-white tw-shadow-sm tw-rounded-xl hover:tw-shadow-md hover:tw--translate-y-0.5 tw-ring-1 tw-ring-gray-200">
                                    <div class="tw-p-4 sm:tw-p-5">
                                        <div class="tw-flex tw-items-center tw-gap-4">
                                            <div class="tw-inline-flex tw-items-center tw-justify-center tw-w-10 tw-h-10 tw-text-red-500 tw-bg-red-100 tw-rounded-full sm:tw-w-12 sm:tw-h-12 shrink-0">
                                                <svg aria-hidden="true" class="tw-w-6 tw-h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2">
                                                    </path>
                                                    <path d="M14.8 8a2 2 0 0 0 -1.8 -1h-2a2 2 0 1 0 0 4h2a2 2 0 1 1 0 4h-2a2 2 0 0 1 -1.8 -1">
                                                    </path>
                                                    <path d="M12 6v10"></path>
                                                </svg>
                                            </div>
                                            <div class="tw-flex-1 tw-min-w-0">
                                                <p class="tw-text-sm tw-font-medium tw-text-gray-500 tw-truncate tw-whitespace-nowrap">
                                                    Expense
                                                </p>
                                                <p class="total_expense tw-mt-0.5 tw-text-gray-900 tw-text-xl tw-truncate tw-font-semibold tw-tracking-tight tw-font-mono">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tw-px-5 tw-py-6">
                    <div class="tw-grid tw-grid-cols-1 tw-gap-4 sm:tw-gap-5 lg:tw-grid-cols-2">
                        <div class="tw-transition-all lg:tw-col-span-2 xl:tw-col-span-2 tw-duration-200 tw-bg-white tw-shadow-sm tw-rounded-xl tw-ring-1 hover:tw-shadow-md hover:tw--translate-y-0.5 tw-ring-gray-200">
                            <div class="tw-p-4 sm:tw-p-5">
                                <div class="tw-flex tw-items-center tw-gap-2.5">
                                    <div class="tw-border-2 tw-flex tw-items-center tw-justify-center tw-rounded-full tw-w-10 tw-h-10">
                                        <svg aria-hidden="true" class="tw-size-5 tw-text-sky-500 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path d="M17 17h-11v-14h-2"></path>
                                            <path d="M6 5l14 1l-1 7h-13"></path>
                                        </svg>
                                    </div>
                                    <h3 class="tw-font-bold tw-text-base lg:tw-text-xl">
                                        Sales Last 30 Days
                                    </h3>
                                </div>
                                <div class="tw-mt-5">
                                    <div class="tw-grid tw-w-full tw-h-100 tw-border tw-border-gray-200 tw-border-dashed tw-rounded-xl tw-bg-gray-50 ">
                                        <p class="tw-text-sm tw-italic tw-font-normal tw-text-gray-400">
                                            <div id="rgymfzceoujksbqwndvpalitx" style='height: 400px !important;'>
                                            </div>
                                            <div id="rgymfzceoujksbqwndvpalitx_loader" style="
    display: flex;
    justify-content: center;
    opacity: 1;
    align-items: center;
    height: 400px;
    
">
                                                <svg width="50" height="50" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
                                                    <defs>
                                                        <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
                                                            <stop stop-color="#22292F" stop-opacity="0" offset="0%" />
                                                            <stop stop-color="#22292F" stop-opacity=".631" offset="63.146%" />
                                                            <stop stop-color="#22292F" offset="100%" />
                                                        </linearGradient>
                                                    </defs>
                                                    <g fill="none" fill-rule="evenodd">
                                                        <g transform="translate(1 1)">
                                                            <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2">
                                                                <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="0.9s" repeatCount="indefinite" />
                                                            </path>
                                                            <circle fill="#22292F" cx="36" cy="18" r="1">
                                                                <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="0.9s" repeatCount="indefinite" />
                                                            </circle>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tw-transition-all lg:tw-col-span-2 xl:tw-col-span-2 tw-duration-200 tw-bg-white tw-shadow-sm tw-rounded-xl tw-ring-1 hover:tw-shadow-md hover:tw--translate-y-0.5 tw-ring-gray-200">
                            <div class="tw-p-4 sm:tw-p-5">
                                <div class="tw-flex tw-items-center tw-gap-2.5">
                                    <div class="tw-border-2 tw-flex tw-items-center tw-justify-center tw-rounded-full tw-w-10 tw-h-10">
                                        <svg aria-hidden="true" class="tw-size-5 tw-text-sky-500 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path d="M17 17h-11v-14h-2"></path>
                                            <path d="M6 5l14 1l-1 7h-13"></path>
                                        </svg>
                                    </div>
                                    <h3 class="tw-font-bold tw-text-base lg:tw-text-xl">
                                        Sales Current Financial Year
                                    </h3>
                                </div>
                                <div class="tw-mt-5">
                                    <div class="tw-grid tw-w-full tw-h-100 tw-border tw-border-gray-200 tw-border-dashed tw-rounded-xl tw-bg-gray-50 ">
                                        <p class="tw-text-sm tw-italic tw-font-normal tw-text-gray-400">
                                            <div id="bmojpzcirewlnuxgvdfakhtsq" style='height: 400px !important;'>
                                            </div>
                                            <div id="bmojpzcirewlnuxgvdfakhtsq_loader" style="
    display: flex;
    justify-content: center;
    opacity: 1;
    align-items: center;
    height: 400px;
    
">
                                                <svg width="50" height="50" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
                                                    <defs>
                                                        <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
                                                            <stop stop-color="#22292F" stop-opacity="0" offset="0%" />
                                                            <stop stop-color="#22292F" stop-opacity=".631" offset="63.146%" />
                                                            <stop stop-color="#22292F" offset="100%" />
                                                        </linearGradient>
                                                    </defs>
                                                    <g fill="none" fill-rule="evenodd">
                                                        <g transform="translate(1 1)">
                                                            <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2">
                                                                <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="0.9s" repeatCount="indefinite" />
                                                            </path>
                                                            <circle fill="#22292F" cx="36" cy="18" r="1">
                                                                <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="0.9s" repeatCount="indefinite" />
                                                            </circle>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tw-transition-all lg:tw-col-span-1 tw-duration-200 tw-bg-white tw-shadow-sm tw-rounded-xl tw-ring-1 hover:tw-shadow-md hover:tw--translate-y-0.5 tw-ring-gray-200">
                            <div class="tw-p-4 sm:tw-p-5">
                                <div class="tw-flex tw-items-center tw-gap-2.5">
                                    <div class="tw-border-2 tw-flex tw-items-center tw-justify-center tw-rounded-full tw-w-10 tw-h-10">
                                        <svg aria-hidden="true" class="tw-text-yellow-500 tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 9v4"></path>
                                            <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z">
                                            </path>
                                            <path d="M12 16h.01"></path>
                                        </svg>
                                    </div>
                                    <div class="tw-flex tw-items-center tw-flex-1 tw-min-w-0 tw-gap-1">
                                        <div class="tw-w-full sm:tw-w-1/2 md:tw-w-1/2">
                                            <h3 class="tw-font-bold tw-text-base lg:tw-text-xl">
                                                Sales Payment Due
                                                <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="Pending payment for Sales. <br/><small class='text-muted'>Based on invoice pay term. <br/> Showing payments to be received in 7 days or less.</small>" data-html="true" data-trigger="hover"></i> </h3>
                                        </div>
                                        <div class="tw-w-full sm:tw-w-1/2 md:tw-w-1/2">
                                            <select class="form-control select2" id="sales_payment_dues_location" name="sales_payment_dues_location">
                                                <option selected="selected" value="">Select location</option>
                                                <option value="31">CS (BL0001)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="tw-flow-root tw-mt-5  tw-border-gray-200">
                                    <div class="tw--mx-4 tw--my-2 tw-overflow-x-auto sm:tw--mx-5">
                                        <div class="tw-inline-block tw-min-w-full tw-py-2 tw-align-middle sm:tw-px-5">
                                            <table class="table table-bordered table-striped" id="sales_payment_dues_table" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Customer</th>
                                                        <th>Invoice No.</th>
                                                        <th>Due Amount</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tw-transition-all lg:tw-col-span-1 tw-duration-200 tw-bg-white tw-shadow-sm tw-rounded-xl tw-ring-1 hover:tw-shadow-md hover:tw--translate-y-0.5 tw-ring-gray-200">
                            <div class="tw-p-4 sm:tw-p-5">
                                <div class="tw-flex tw-items-center tw-gap-2.5">
                                    <div class="tw-border-2 tw-flex tw-items-center tw-justify-center tw-rounded-full tw-w-10 tw-h-10">
                                        <svg aria-hidden="true" class="tw-text-yellow-500 tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 9v4"></path>
                                            <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z">
                                            </path>
                                            <path d="M12 16h.01"></path>
                                        </svg>
                                    </div>
                                    <div class="tw-flex tw-items-center tw-flex-1 tw-min-w-0 tw-gap-1">
                                        <div class="tw-w-full sm:tw-w-1/2 md:tw-w-1/2">
                                            <h3 class="tw-font-bold tw-text-base lg:tw-text-xl">
                                                Purchase Payment Due
                                                <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="Pending payment for purchases. <br/><small class='text-muted'>Based on supplier's pay term. <br/> Showing payments to be paid in 7 days or less.</small>" data-html="true" data-trigger="hover"></i> </h3>
                                        </div>
                                        <div class="tw-w-full sm:tw-w-1/2 md:tw-w-1/2">
                                        </div>
                                    </div>
                                </div>
                                <div class="tw-flow-root tw-mt-5  tw-border-gray-200">
                                    <div class="tw--mx-4 tw--my-2 tw-overflow-x-auto sm:tw--mx-5">
                                        <div class="tw-inline-block tw-min-w-full tw-py-2 tw-align-middle sm:tw-px-5">
                                            <table class="table table-bordered table-striped" id="purchase_payment_dues_table" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Supplier</th>
                                                        <th>Reference No</th>
                                                        <th>Due Amount</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tw-transition-all lg:tw-col-span-2 tw-duration-200 tw-bg-white tw-shadow-sm tw-rounded-xl tw-ring-1 hover:tw-shadow-md hover:tw--translate-y-0.5 tw-ring-gray-200">
                            <div class="tw-p-4 sm:tw-p-5">
                                <div class="tw-flex tw-items-center tw-gap-2.5">
                                    <div class="tw-border-2 tw-flex tw-items-center tw-justify-center tw-rounded-full tw-w-10 tw-h-10">
                                        <svg aria-hidden="true" class="tw-text-yellow-500 tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                            <path d="M12 8v4"></path>
                                            <path d="M12 16h.01"></path>
                                        </svg>
                                    </div>
                                    <div class="tw-flex tw-items-center tw-flex-1 tw-min-w-0 tw-gap-1">
                                        <div class="tw-w-full sm:tw-w-1/2 md:tw-w-1/2">
                                            <h3 class="tw-font-bold tw-text-base lg:tw-text-xl">
                                                Product Stock Alert
                                                <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="Products with low stock.<br/><small class='text-muted'>Based on product alert quantity set in add product screen.<br> Purchase this products before stock ends.</small>" data-html="true" data-trigger="hover"></i> </h3>
                                        </div>
                                        <div class="tw-w-full sm:tw-w-1/2 md:tw-w-1/2">
                                        </div>
                                    </div>
                                </div>
                                <div class="tw-flow-root tw-mt-5  tw-border-gray-200">
                                    <div class="tw--mx-4 tw--my-2 tw-overflow-x-auto sm:tw--mx-5">
                                        <div class="tw-inline-block tw-min-w-full tw-py-2 tw-align-middle sm:tw-px-5">
                                            <table class="table table-bordered table-striped" id="stock_alert_table" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Location</th>
                                                        <th>Current stock</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tw-transition-all lg:tw-col-span-2 tw-duration-200 tw-bg-white tw-shadow-sm tw-rounded-xl tw-ring-1 hover:tw-shadow-md hover:tw--translate-y-0.5 tw-ring-gray-200">
                            <div class="tw-p-4 sm:tw-p-5">
                                <div class="tw-flex tw-items-center tw-gap-2.5">
                                    <div class="tw-border-2 tw-flex tw-items-center tw-justify-center tw-rounded-full tw-w-10 tw-h-10">
                                        <svg aria-hidden="true" class="tw-text-yellow-500 tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                            <path d="M12 8v4"></path>
                                            <path d="M12 16h.01"></path>
                                        </svg>
                                    </div>
                                    <div class="tw-flex tw-items-center tw-flex-1 tw-min-w-0 tw-gap-1">
                                        <div class="tw-w-full sm:tw-w-1/2 md:tw-w-1/2">
                                            <h3 class="tw-font-bold tw-text-base lg:tw-text-xl">
                                                Sales Order
                                            </h3>
                                        </div>
                                        <div class="tw-w-full sm:tw-w-1/2 md:tw-w-1/2">
                                        </div>
                                    </div>
                                </div>
                                <div class="tw-flow-root tw-mt-5  tw-border-gray-200">
                                    <div class="tw--mx-4 tw--my-2 tw-overflow-x-auto sm:tw--mx-5">
                                        <div class="tw-inline-block tw-min-w-full tw-py-2 tw-align-middle sm:tw-px-5">
                                            <table class="table table-bordered table-striped ajax_view" id="sales_order_table">
                                                <thead>
                                                    <tr>
                                                        <th>Action</th>
                                                        <th>Date</th>
                                                        <th>Order No.</th>
                                                        <th>Customer name</th>
                                                        <th>Contact Number</th>
                                                        <th>Location</th>
                                                        <th>Status</th>
                                                        <th>Shipping Status</th>
                                                        <th>Quantity Remaining</th>
                                                        <th>Added By</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tw-transition-all lg:tw-col-span-2 tw-duration-200 tw-bg-white tw-shadow-sm tw-rounded-xl tw-ring-1 hover:tw-shadow-md hover:tw--translate-y-0.5 tw-ring-gray-200">
                            <div class="tw-p-4 sm:tw-p-5">
                                <div class="tw-flex tw-items-center tw-gap-2.5">
                                    <div class="tw-border-2 tw-flex tw-items-center tw-justify-center tw-rounded-full tw-w-10 tw-h-10">
                                        <svg aria-hidden="true" class="tw-text-yellow-500 tw-size-5 tw-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                                            <path d="M3 9l4 0"></path>
                                        </svg>
                                    </div>
                                    <div class="tw-flex tw-items-center tw-flex-1 tw-min-w-0 tw-gap-1">
                                        <div class="tw-w-full sm:tw-w-1/2 md:tw-w-1/2">
                                            <h3 class="tw-font-bold tw-text-base lg:tw-text-xl">
                                                Pending Shipments </h3>
                                        </div>
                                        <div class="tw-w-full sm:tw-w-1/2 md:tw-w-1/2">
                                        </div>
                                    </div>
                                </div>
                                <div class="tw-flow-root tw-mt-5  tw-border-gray-200">
                                    <div class="tw--mx-4 tw--my-2 tw-overflow-x-auto sm:tw--mx-5">
                                        <div class="tw-inline-block tw-min-w-full tw-py-2 tw-align-middle sm:tw-px-5">
                                            <table class="table table-bordered table-striped ajax_view" id="shipments_table">
                                                <thead>
                                                    <tr>
                                                        <th>Action</th>
                                                        <th>Date</th>
                                                        <th>Invoice No.</th>
                                                        <th>Customer name</th>
                                                        <th>Contact Number</th>
                                                        <th>Location</th>
                                                        <th>Shipping Status</th>
                                                        <th>Payment Status</th>
                                                        <th>Service staff</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tw-mt-auto">
                    <div class="tw-mb-4 tw-ms-8 -tw-mt-1 no-print">
                        <p class="tw-text-xs tw-font-normal tw-text-gray-500">
                            POS Solution - <span class="tw-font-mono tw-font-medium"> V6.4</span> | Copyright &copy; 2024 All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
            <div class='scrolltop no-print'>
                <div class='scroll icon'><i class="fas fa-angle-up"></i></div>
            </div>
            <!-- This will be printed -->
            <section class="invoice print_section" id="receipt_section">
            </section>
        </main>
        <div class="modal fade" id="todays_profit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Today's profit</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="modal_today" value="2024-12-07">
                        <div class="row">
                            <div id="todays_profit">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="tw-dw-btn tw-dw-btn-neutral tw-text-white" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> <!-- /.content-wrapper -->
        <audio id="success-audio">
            <source src="https://possolution.com.bd/audio/success.ogg?v=600" type="audio/ogg">
            <source src="https://possolution.com.bd/audio/success.mp3?v=600" type="audio/mpeg">
        </audio>
        <audio id="error-audio">
            <source src="https://possolution.com.bd/audio/error.ogg?v=600" type="audio/ogg">
            <source src="https://possolution.com.bd/audio/error.mp3?v=600" type="audio/mpeg">
        </audio>
        <audio id="warning-audio">
            <source src="https://possolution.com.bd/audio/warning.ogg?v=600" type="audio/ogg">
            <source src="https://possolution.com.bd/audio/warning.mp3?v=600" type="audio/mpeg">
        </audio>
        <div class="modal fade" id="task_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        </div>
        <script type="text/javascript">
        base_path = "https://possolution.com.bd";
        //used for push notification
        APP = {};
        APP.PUSHER_APP_KEY = '';
        APP.PUSHER_APP_CLUSTER = '';
        APP.INVOICE_SCHEME_SEPARATOR = '-';
        //variable from app service provider
        APP.PUSHER_ENABLED = '';
        APP.USER_ID = "48";

        </script>
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js?v=$asset_v"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js?v=$asset_v"></script>
<![endif]-->
        <script src="https://possolution.com.bd/js/vendor.js?v=600"></script>
        <script src="https://possolution.com.bd/js/lang/en.js?v=600">
        </script>
        <script>
        Dropzone.autoDiscover = false;
        moment.tz.setDefault('Asia/Dhaka');
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.fn.dataTable.ext.errMode = 'throw';
        });

        var financial_year = {
            start: moment('2024-01-01'),
            end: moment('2024-12-31'),
        }

        var datepicker_date_format = "mm/dd/yyyy";
        var moment_date_format = "MM/DD/YYYY";
        var moment_time_format = "HH:mm";

        var app_locale = "en";

        var non_utf8_languages = [
            "ar",
            "hi",
            "ps",
        ];

        var __default_datatable_page_entries = "25";

        var __new_notification_count_interval = "60000";

        </script>
        <script src="https://possolution.com.bd/js/lang/en.js?v=600">
        </script>
        <script src="https://possolution.com.bd/js/functions.js?v=600"></script>
        <script src="https://possolution.com.bd/js/common.js?v=600"></script>
        <script src="https://possolution.com.bd/js/app.js?v=600"></script>
        <script src="https://possolution.com.bd/js/help-tour.js?v=600"></script>
        <script src="https://possolution.com.bd/js/documents_and_note.js?v=600"></script>
        <!-- TODO -->
        <script type="text/javascript">
        $(document).on("ifChecked", ".allow_login", function() {
            $("#" + $(this).attr("data-loginDiv")).removeClass("hide");
        })
        $(document).on("ifUnchecked", ".allow_login", function() {
            $("#" + $(this).attr("data-loginDiv")).addClass("hide");
        })
        $(document).on("contactFormvalidationAdded", "#contact_add_form", function(e) {

            $("#contact_add_form .input-icheck").iCheck({
                checkboxClass: "icheckbox_square-blue"
            });

            if ($("#username0").length) {
                $("#username0").rules("add", {
                    minlength: 5,
                    remote: {
                        url: "/business/register/check-username",
                        type: "post",
                        data: {
                            username: function() {
                                return $("#username0").val();
                            }
                        }
                    },
                    messages: {
                        remote: "Invalid username or User already exist"
                    }
                });
            }

            if ($("#username1").length) {
                $("#username1").rules("add", {
                    minlength: 5,
                    remote: {
                        url: "/business/register/check-username",
                        type: "post",
                        data: {
                            username: function() {
                                return $("#username1").val();
                            }
                        }
                    },
                    messages: {
                        remote: "Invalid username or User already exist"
                    }
                });
            }

            if ($("#username2").length) {
                $("#username2").rules("add", {
                    minlength: 5,
                    remote: {
                        url: "/business/register/check-username",
                        type: "post",
                        data: {
                            username: function() {
                                return $("#username2").val();
                            }
                        }
                    },
                    messages: {
                        remote: "Invalid username or User already exist"
                    }
                });
            }
        });

        </script>
        <script src="https://possolution.com.bd/js/home.js?v=600"></script>
        <script src="https://possolution.com.bd/js/payment.js?v=600"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '.edit-so-status', function() {
                var url = $(this).data('href');
                $.ajax({
                    method: "GET",
                    dataType: "html",
                    url: url,
                    success: function(result) {
                        $('.edit_pso_status_modal').html(result).modal("show");
                    }
                });
            });

            $(document).on('submit', 'form#update_so_status_form', function(e) {
                e.preventDefault();
                var url = $('form#update_so_status_form').attr('action');
                var method = $('form#update_so_status_form').attr('method');
                var data = $('form#update_so_status_form').serialize();
                var ladda = Ladda.create(document.querySelector('.ladda-button'));
                ladda.start();
                $.ajax({
                    method: method,
                    dataType: "json",
                    url: url,
                    data: data,
                    success: function(result) {
                        ladda.stop();
                        if (result.success) {
                            $('.edit_pso_status_modal').modal("hide");
                            toastr.success(result.msg);
                            if (typeof(sell_table) != 'undefined') {
                                sell_table.ajax.reload();
                            }
                            if (typeof(sales_order_table) != 'undefined') {
                                sales_order_table.ajax.reload();
                            }
                        } else {
                            toastr.error(result.msg);
                        }
                    }
                });
            });
        });

        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '.edit-po-status', function() {
                var url = $(this).data('href');
                $.ajax({
                    method: "GET",
                    dataType: "html",
                    url: url,
                    success: function(result) {
                        $('.edit_pso_status_modal').html(result).modal("show");
                    }
                });
            });

            $(document).on('submit', 'form#update_po_status_form', function(e) {
                e.preventDefault();
                var url = $('form#update_po_status_form').attr('action');
                var method = $('form#update_po_status_form').attr('method');
                var data = $('form#update_po_status_form').serialize();
                var ladda = Ladda.create(document.querySelector('.ladda-button'));
                ladda.start();
                $.ajax({
                    method: method,
                    dataType: "json",
                    url: url,
                    data: data,
                    success: function(result) {
                        ladda.stop();
                        if (result.success) {
                            $('.edit_pso_status_modal').modal("hide");
                            toastr.success(result.msg);
                            if (typeof(purchase_order_table) != 'undefined') {
                                purchase_order_table.ajax.reload();
                            }
                        } else {
                            toastr.error(result.msg);
                        }
                    }
                });
            });
        });

        </script>
        <script type="text/javascript">
        function rgymfzceoujksbqwndvpalitx_create(data) {
            rgymfzceoujksbqwndvpalitx_rendered = true;
            document.getElementById("rgymfzceoujksbqwndvpalitx_loader").style.display = 'none';
            window.rgymfzceoujksbqwndvpalitx = new Highcharts.Chart("rgymfzceoujksbqwndvpalitx", {
                series: data,
                "credits": { "enabled": false },
                "title": { "text": null },
                "yAxis": { "title": { "text": "Total Sales (BDT)" } },
                "legend": { "align": "right", "verticalAlign": "top", "floating": true, "layout": "vertical", "padding": 20 },
                "xAxis": { "categories": ["8 Nov 2024", "9 Nov 2024", "10 Nov 2024", "11 Nov 2024", "12 Nov 2024", "13 Nov 2024", "14 Nov 2024", "15 Nov 2024", "16 Nov 2024", "17 Nov 2024", "18 Nov 2024", "19 Nov 2024", "20 Nov 2024", "21 Nov 2024", "22 Nov 2024", "23 Nov 2024", "24 Nov 2024", "25 Nov 2024", "26 Nov 2024", "27 Nov 2024", "28 Nov 2024", "29 Nov 2024", "30 Nov 2024", "1 Dec 2024", "2 Dec 2024", "3 Dec 2024", "4 Dec 2024", "5 Dec 2024", "6 Dec 2024", "7 Dec 2024"] }
            });
        }
        let rgymfzceoujksbqwndvpalitx_rendered = false;
        let rgymfzceoujksbqwndvpalitx_load = function() {
            if (document.getElementById("rgymfzceoujksbqwndvpalitx") && !rgymfzceoujksbqwndvpalitx_rendered) {
                rgymfzceoujksbqwndvpalitx_create([{ "data": [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], "name": "CS (BL0001)", "type": "line" }])
            }
        };
        window.addEventListener("load", rgymfzceoujksbqwndvpalitx_load);
        document.addEventListener("turbolinks:load", rgymfzceoujksbqwndvpalitx_load);

        </script>
        <script type="text/javascript">
        function bmojpzcirewlnuxgvdfakhtsq_create(data) {
            bmojpzcirewlnuxgvdfakhtsq_rendered = true;
            document.getElementById("bmojpzcirewlnuxgvdfakhtsq_loader").style.display = 'none';
            window.bmojpzcirewlnuxgvdfakhtsq = new Highcharts.Chart("bmojpzcirewlnuxgvdfakhtsq", {
                series: data,
                "credits": { "enabled": false },
                "title": { "text": null },
                "yAxis": { "title": { "text": "Total Sales (BDT)" } },
                "legend": { "align": "right", "verticalAlign": "top", "floating": true, "layout": "vertical", "padding": 20 },
                "xAxis": { "categories": ["Jan-2024", "Feb-2024", "Mar-2024", "Apr-2024", "May-2024", "Jun-2024", "Jul-2024", "Aug-2024", "Sep-2024", "Oct-2024", "Nov-2024", "Dec-2024"] }
            });
        }
        let bmojpzcirewlnuxgvdfakhtsq_rendered = false;
        let bmojpzcirewlnuxgvdfakhtsq_load = function() {
            if (document.getElementById("bmojpzcirewlnuxgvdfakhtsq") && !bmojpzcirewlnuxgvdfakhtsq_rendered) {
                bmojpzcirewlnuxgvdfakhtsq_create([{ "data": [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], "name": "CS (BL0001)", "type": "line" }])
            }
        };
        window.addEventListener("load", bmojpzcirewlnuxgvdfakhtsq_load);
        document.addEventListener("turbolinks:load", bmojpzcirewlnuxgvdfakhtsq_load);

        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            sales_order_table = $('#sales_order_table').DataTable({
                processing: true,
                serverSide: true,
                fixedHeader: false,
                scrollY: "75vh",
                scrollX: true,
                scrollCollapse: true,
                aaSorting: [
                    [1, 'desc']
                ],
                "ajax": {
                    "url": 'https://possolution.com.bd/sells?sale_type=sales_order',
                    "data": function(d) {
                        d.for_dashboard_sales_order = true;

                        if ($('#so_location').length > 0) {
                            d.location_id = $('#so_location').val();
                        }
                    }
                },
                columnDefs: [{
                    "targets": 7,
                    "orderable": false,
                    "searchable": false
                }],
                columns: [{
                        data: 'action',
                        name: 'action'
                    },
                    {
                        data: 'transaction_date',
                        name: 'transaction_date'
                    },
                    {
                        data: 'invoice_no',
                        name: 'invoice_no'
                    },
                    {
                        data: 'conatct_name',
                        name: 'conatct_name'
                    },
                    {
                        data: 'mobile',
                        name: 'contacts.mobile'
                    },
                    {
                        data: 'business_location',
                        name: 'bl.name'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'shipping_status',
                        name: 'shipping_status'
                    },
                    {
                        data: 'so_qty_remaining',
                        name: 'so_qty_remaining',
                        "searchable": false
                    },
                    {
                        data: 'added_by',
                        name: 'u.first_name'
                    },
                ]
            });


            $('#so_location').change(function() {
                sales_order_table.ajax.reload();
            });


            sell_table = $('#shipments_table').DataTable({
                processing: true,
                serverSide: true,
                fixedHeader: false,
                aaSorting: [
                    [1, 'desc']
                ],
                scrollY: "75vh",
                scrollX: true,
                scrollCollapse: true,
                "ajax": {
                    "url": 'https://possolution.com.bd/sells',
                    "data": function(d) {
                        d.only_pending_shipments = true;
                        if ($('#pending_shipments_location').length > 0) {
                            d.location_id = $('#pending_shipments_location').val();
                        }
                    }
                },
                columns: [{
                        data: 'action',
                        name: 'action',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'transaction_date',
                        name: 'transaction_date'
                    },
                    {
                        data: 'invoice_no',
                        name: 'invoice_no'
                    },
                    {
                        data: 'conatct_name',
                        name: 'conatct_name'
                    },
                    {
                        data: 'mobile',
                        name: 'contacts.mobile'
                    },
                    {
                        data: 'business_location',
                        name: 'bl.name'
                    },
                    {
                        data: 'shipping_status',
                        name: 'shipping_status'
                    },
                    {
                        data: 'payment_status',
                        name: 'payment_status'
                    },
                    {
                        data: 'waiter',
                        name: 'ss.first_name',
                        visible: false
                    }
                ],
                "fnDrawCallback": function(oSettings) {
                    __currency_convert_recursively($('#sell_table'));
                },
                createdRow: function(row, data, dataIndex) {
                    $(row).find('td:eq(4)').attr('class', 'clickable_td');
                }
            });

            $('#pending_shipments_location').change(function() {
                sell_table.ajax.reload();
            });
        });

        </script>
        <div class="modal fade" id="clock_in_clock_out_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="POST" action="https://possolution.com.bd/hrm/clock-in-clock-out" accept-charset="UTF-8" id="clock_in_clock_out_form"><input name="_token" type="hidden" value="CTkSYsQWzVOblC24lMf5EI1ldhhKBn2EwBaIwugg">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><span id="clock_in_text">Clock In</span>
                                <span id="clock_out_text">Clock Out</span></h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <input type="hidden" name="type" id="type">
                                <div class="form-group col-md-12">
                                    <strong>IP Address: 103.126.218.161</strong>
                                </div>
                                <div class="form-group col-md-12 clock_in_note ">
                                    <label for="clock_in_note">Clock in note:</label>
                                    <textarea class="form-control" placeholder="Clock in note" rows="3" name="clock_in_note" cols="50" id="clock_in_note"></textarea>
                                </div>
                                <div class="form-group col-md-12 clock_out_note  hide ">
                                    <label for="clock_out_note">Clock out note:</label>
                                    <textarea class="form-control" placeholder="Clock out note" rows="3" name="clock_out_note" cols="50" id="clock_out_note"></textarea>
                                </div>
                                <input type="hidden" name="clock_in_out_location" id="clock_in_out_location" value="">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="tw-dw-btn tw-dw-btn-primary tw-text-white">Submit</button>
                            <button type="button" class="tw-dw-btn tw-dw-btn-neutral tw-text-white" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#essentials_dob').datepicker();
            $('.clock_in_btn, .clock_out_btn').click(function() {
                var type = $(this).data('type');
                if (type == 'clock_in') {
                    $('#clock_in_clock_out_modal').find('#clock_in_text').removeClass('hide');
                    $('#clock_in_clock_out_modal').find('#clock_out_text').addClass('hide');
                    $('#clock_in_clock_out_modal').find('.clock_in_note').removeClass('hide');
                    $('#clock_in_clock_out_modal').find('.clock_out_note').addClass('hide');
                } else if (type == 'clock_out') {
                    $('#clock_in_clock_out_modal').find('#clock_in_text').addClass('hide');
                    $('#clock_in_clock_out_modal').find('#clock_out_text').removeClass('hide');
                    $('#clock_in_clock_out_modal').find('.clock_in_note').addClass('hide');
                    $('#clock_in_clock_out_modal').find('.clock_out_note').removeClass('hide');
                }
                $('#clock_in_clock_out_modal').find('input#type').val(type);

                $('#clock_in_clock_out_modal').modal('show');
            });
        });

        $(document).on('submit', 'form#clock_in_clock_out_form', function(e) {
            e.preventDefault();
            $(this).find('button[type="submit"]').attr('disabled', true);
            var data = $(this).serialize();

            $.ajax({
                method: $(this).attr('method'),
                url: $(this).attr('action'),
                dataType: 'json',
                data: data,
                success: function(result) {
                    if (result.success == true) {
                        $('div#clock_in_clock_out_modal').modal('hide');

                        var shift_details = document.createElement("div");
                        if (result.current_shift) {
                            shift_details.innerHTML = result.current_shift;
                        }

                        swal({
                            title: result.msg,
                            content: shift_details,
                            icon: 'success'
                        });

                        if (typeof attendance_table !== 'undefined') {
                            attendance_table.ajax.reload();
                        }
                        if (result.type == 'clock_in') {
                            $('.clock_in_btn').addClass('hide');
                            $('.clock_out_btn').removeClass('hide');
                        } else if (result.type == 'clock_out') {
                            $('.clock_out_btn').addClass('hide');
                            $('.clock_in_btn').removeClass('hide');
                        }
                    } else {
                        var shift_details = document.createElement("p");
                        if (result.shift_details) {
                            shift_details.innerHTML = result.shift_details;
                        }

                        swal({
                            title: result.msg,
                            content: shift_details,
                            icon: 'error'
                        })
                    }
                    $('#clock_in_clock_out_form')[0].reset();
                    $('#clock_in_clock_out_form').find('button[type="submit"]').removeAttr('disabled');
                },
            });
        });

        $(document).on('click', '#get_current_location', function() {
            getFullAddress();
        });

        function getFullAddress() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        var latitude = position.coords.latitude;
                        var longitude = position.coords.longitude;

                        $.ajax({
                            url: '/user-location/' + latitude + ',' + longitude,
                            dataType: 'json',
                            success: function(result) {
                                if (typeof result.address !== 'undefined') {

                                    $("input#clock_in_out_location").val(result.address);
                                    $("span.clock_in_out_location").text(result.address);
                                    $("div.ask_location").hide();
                                } else if (typeof result.error_message !== 'undefined') {
                                    console.log(result.error_message);
                                }
                            }
                        });

                    },
                    () => {
                        $("div.ask_location").show();
                        $("span.location_required").text("Location is required, you must enable location")
                        console.log("Error: The Geolocation service failed.");
                    }
                );
            } else {
                $("div.ask_location").show();
                $("span.location_required").text("Location is required, you must enable location")
                // Browser doesn't support Geolocation
                console.log("Browser doesn't support Geolocation");
            }
        }

        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            var locale = "en";
            var isRTL =
                false;

            $('#calendar').fullCalendar('option', {
                locale: locale,
                isRTL: isRTL
            });
            // side bar toggle  
            $(".drop_down").click(function(event) {
                event.preventDefault();
                var $chiled = $(this).next(".chiled");
                var svgElement = $(this).find(".svg");
                $(".chiled").not($chiled).slideUp();
                $chiled.slideToggle(function() {
                    $(".svg").each(function() {
                        var $currentSvgElement = $(this);
                        if ($currentSvgElement.closest(".drop_down").next(".chiled").is(
                                ":visible")) {
                            // If the corresponding menu is visible, set the arrow pointing upwards
                            $currentSvgElement.html(
                                '<path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M6 9l6 6l6 -6" />'
                            );
                        } else {
                            // Otherwise, set the arrow pointing downwards
                            $currentSvgElement.html(
                                '<path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" />'
                            );
                        }
                    });
                });
            });

            $('.small-view-button').on('click', function() {
                $('.side-bar').addClass('small-view-side-active');
                $('.overlay').fadeIn('slow');
            });

            $('.overlay').on('click', function() {
                $('.overlay').fadeOut('slow');
                $('.side-bar').removeClass('small-view-side-active');
            });

            $(window).on('resize', function() {
                if ($(window).width() >= 992) {
                    $('.overlay').fadeOut('slow');
                    $('.side-bar').removeClass('small-view-side-active');
                }

                if ($('.side-bar').hasClass('small-view-side-active')) {
                    $('.overlay').fadeIn('slow');
                }
            });

            $(document).on('click', function(e) {
                $('[data-toggle="popover"]').popover();

                $(document).on('click', function(e) {
                    $('[data-toggle="popover"]').each(function() {
                        // Check if the clicked element is the popover button or inside the popover
                        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                            $(this).popover('hide');
                        }
                    });
                });

            });

            $('.side-bar-collapse').click(function() {
                $('.side-bar').toggle('slow');
            });

            $('.dt-buttons.btn-group').find('a.btn').removeClass('btn-default');
            $('.dt-buttons.btn-group').find('a.btn').removeClass('btn');

            // $('.date_range').on('show.daterangepicker', function (ev, picker) {
            //     $(picker.container).insertAfter($(this));
            // });

        });

        </script>
        <div class="modal fade view_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel"></div>
        <script type="text/javascript">
        $('#task_modal').on('shown.bs.modal', function() {
            $('form#task_form .datepicker').datetimepicker({
                format: moment_date_format + ' ' + moment_time_format,
                ignoreReadonly: true,
            });
            $('form#task_form .select2').select2({ dropdownParent: $(this) });

            tinymce.init({
                selector: 'textarea#to_do_description',
            });

            if ($('#media_upload').length) {
                $(this).find("div#media_upload").dropzone({
                    url: $('#media_upload_url').val(),
                    paramName: 'file',
                    uploadMultiple: true,
                    autoProcessQueue: false,
                    addRemoveLinks: true,
                    params: {
                        'model_id': $('#model_id').val(),
                        'model_type': $('#model_type').val(),
                        'model_media_type': $('#model_media_type').val()
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(file, response) {
                        if (response.success) {
                            toastr.success(response.msg);
                            $("#task_modal").modal('hide');
                        } else {
                            toastr.error(response.msg);
                        }
                    },
                });
            }

            //form validation
            $("form#task_form").validate();
        });

        $('#task_modal').on('hide.bs.modal', function() {
            tinymce.remove("textarea#to_do_description");
        });

        //form submit
        $(document).on('submit', 'form#task_form', function(e) {
            e.preventDefault();
            var url = $(this).attr("action");
            var method = $(this).attr("method");
            var data = $("form#task_form").serialize();
            var ladda = Ladda.create(document.querySelector('.ladda-button'));
            ladda.start();
            $.ajax({
                method: method,
                url: url,
                data: data,
                dataType: "json",
                success: function(result) {
                    ladda.stop();
                    if (result.success == true) {
                        var myDropzone = Dropzone.forElement("#media_upload");

                        if (typeof result.todo_id !== 'undefined') {
                            myDropzone.options.params.model_id = result.todo_id;
                        }

                        myDropzone.processQueue();

                        if (typeof task_table !== 'undefined') {
                            task_table.ajax.reload();
                        }

                        if ($('#task_modal').length) {
                            $('#task_modal').modal('hide');
                        }

                        if ($('#calendar').length) {
                            $('#calendar').fullCalendar('refetchEvents');
                        }
                    } else {
                        toastr.error(result.msg);
                    }
                }
            });
        });

        </script>
        <div>
            <div class="overlay tw-hidden"></div>

@endsection