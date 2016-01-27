%html{:class => "no-js", :lang => "pt-br"}

    %head
        %meta{:charset => "utf-8"}/
        %meta{:name => "viewport", :content => "width=device-width, initial-scale=1"}/

        /Meta nameTemplate
        @yield('Title')
        @yield('MetaDescription')
        @yield('MetaKeywords')

        %meta{:name => "author", :content => "Simone Heringer by Atemporale Design"}/
        %meta{:name => "application-name", :content => "Portf&oacute;lio de Simone Heringer"}/

        /Meta name og    
        
        /Meta name verify
        %meta{:name => "google-site-verification", :content => "dbhJ1boOI8Eyz29DrSMAuVnpDdLDoI_mnMTHQGqe-G0"}/

        /Favicon.ico
        /%link{:rel => "shortcut icon", :href => "{{ asset('/img/favicon/favicon.ico')}}", :type => "image/x-icon"}/
        /%link{:rel => "apple-touch-icon", :sizes => "57x57", :href => "{{ asset('/img/favicon/apple_touch_icon_57.png')}}"}/
        /%link{:rel => "apple-touch-icon", :sizes => "60x60", :href => "{{ asset('/img/favicon/apple_touch_icon_60.png')}}"}/
        /%link{:rel => "apple-touch-icon", :sizes => "72x72", :href => "{{ asset('/img/favicon/apple_touch_icon_72.png')}}"}/
        /%link{:rel => "apple-touch-icon", :sizes => "76x76", :href => "{{ asset('/img/favicon/apple_touch_icon_76.png')}}"}/
        /%link{:rel => "apple-touch-icon", :sizes => "114x114", :href => "{{ asset('/img/favicon/apple_touch_icon_114.png')}}"}/
        /%link{:rel => "apple-touch-icon", :sizes => "120x120", :href => "{{ asset('/img/favicon/apple_touch_icon_120.png')}}"}/
        /%link{:rel => "apple-touch-icon", :sizes => "144x144", :href => "{{ asset('/img/favicon/apple_touch_icon_144.png')}}"}/
        /%link{:rel => "apple-touch-icon", :sizes => "152x152", :href => "{{ asset('/img/favicon/apple_touch_icon_152.png')}}"}/
        /%link{:rel => "apple-touch-icon", :sizes => "180x180", :href => "{{ asset('/img/favicon/apple_touch_icon_180.png')}}"}/
        /%link{:rel => "icon", :type => "image/png", :href => "{{ asset('/img/favicon/favicon_16.png')}}", :sizes => "16x16"}/
        /%link{:rel => "icon", :type => "image/png", :href => "{{ asset('/img/favicon/favicon_32.png')}}", :sizes => "32x32"}/
        /%link{:rel => "icon", :type => "image/png", :href => "{{ asset('/img/favicon/favicon_96.png')}}", :sizes => "96x96"}/
        /%link{:rel => "icon", :type => "image/png", :href => "{{ asset('/img/favicon/android_chrome_192.png')}}", :sizes => "192x192"}/
        /%meta{:name => "msapplication-square70x70logo", :content => "{{ asset('/img/favicon/smalltile.png')}}"}/
        /%meta{:name => "msapplication-square150x150logo", :content => "{{ asset('/img/favicon/mediumtile.png')}}"}/
        /%meta{:name => "msapplication-wide310x150logo", :content => "{{ asset('/img/favicon/widetile.png')}}"}/
        /%meta{:name => "msapplication-square310x310logo", :content => "{{ asset('/img/favicon/largetile.png')}}"}/

        /Page CSS
        @yield('cssPagina')   


        /Librerie js
        %script{:src=>"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", :type=>"text/javascript"}
        %script{:src=>"http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js", :type=>"text/javascript"}

        /Script interni per pagina
        @yield('jsPagina')

    %body{:itemtype=>"http://schema.org/HomeAndConstructionBusiness", :itemscope=>""}

        /contenuto centrale
        %section.main{:role=>"main"}
            @yield('content')

        /bordo superiore bianco
        #fascia_logo
            %a{:href=>"{{ route('public.index') }}", :title=>"#"}
                %img{:src=>"{{asset('/img/layout/logo_template_esteso.png')}}", :role=>"logo", :alt=>""}/

        /bordo inferiore bianco
        %footer
            %address
                Entre em contato 
                %img{:src=>"{{asset('/img/layout/icona_telefono.png')}}", :role=>"icon", :alt=>""}/
                (31) 2510 - 4372

        /bordo laterale sinistro bianco
        %header{:role=>"navigation"}
            /:aria=>{:label => "navigation menu"}
            #espandi_menu{:role=>"button"}
                %img{:src=>"{{asset('/img/layout/icona_menu_apri.png')}}", :alt=>"", :role=>"icon", :whith=>"100%", :height=>"100%"}/
                /:aria=>{:controls => "navigation", :expanded=>"false"}
                %img{:src=>"{{asset('/img/layout/icona_menu_chiudi.png')}}", :alt=>"", :role=>"icon", :whith=>"100%", :height=>"100%"}/
            %nav{:role=>"menu", :id=>"menu"}
                %img{:src=>"{{asset('/img/layout/logo_template_esteso.png')}}", :role=>"logo", :alt=>""}/
                %ul{:class=>"internal", :role=>"menubar"}
                    %li{:role=>"menuitem"}
                        %a{:href=>"{{ route('public.index') }}", :role=>"link", :title=>""} home
                    %li{:role=>"menuitem"}
                        %a{:href=>"{{ route('public.sobre') }}", :role=>"link", :title=>""} sobre mim
                    %li{:role=>"menuitem"}
                        %a{:href=>"{{ route('public.processo') }}", :role=>"link", :title=>""} processo
                    %li{:role=>"menuitem"}
                        %a{:href=>"{{ route('public.servizi') }}", :role=>"link", :title=>""} servi&ccedil;os
                    %li{:role=>"menuitem"}
                        %a{:href=>"{{ route('public.portfolio') }}", :role=>"link", :title=>""} portf&oacute;lio
                    %li{:role=>"menuitem"}
                        %a{:href=>"{{ route('public.contatti') }}", :role=>"link", :title=>""} contato



                %ul{:class=>"external", :role=>"menubar"}
                    %li{:role=>"menuitem"}
                        %a{:href=>"#", :role=>"link", :title=>"", :target=>"_blank", :class=>"fa fa-facebook-square"}
                            
                    %li{:role=>"menuitem"}
                        %a{:href=>"#", :role=>"link", :title=>"", :target=>"_blank", :class=>"fa fa-instagram"}




        /bordo laterale destro bianco
        #barra_destra
            .contextual_nav
                %ul{:role=>"navigation"}
                    %li.vs-prev.fa.fa-angle-up{:role=>"prev"}

                    %li.cerchio.active{:role=>"button"}
                    %li.cerchio{:role=>"button"}
                    %li.cerchio{:role=>"button"}
                    %li.cerchio{:role=>"button"}
                    %li.cerchio{:role=>"button"}
                    %li.cerchio{:role=>"button"}

                    %li.vs-next.fa.fa-angle-down{:role=>"next"}





        

        /Google Analytics
