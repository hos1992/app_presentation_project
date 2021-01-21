<section id="section-1-2" class="work-process colored">
    <div class="container">

        <div class="section-header text-center">
            <h2>
                {{ strip_tags(trim($how_it_works['title_'. app()->getLocale()])) }}
            </h2>
            <p>
                {{ strip_tags(trim($how_it_works->data['excerpt_'. app()->getLocale()])) }}

            </p>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="item text-center">
                    <div class="icon-wrap">
                        <span class="step s1-1">1</span>
                        <span class="icon-tools-2"></span>
                    </div>
                    <h3>{{ strip_tags(trim($how_it_works->data['steps'][1]['title_'. app()->getLocale()])) }}</h3>
                    <p>{{ strip_tags(trim($how_it_works->data['steps'][1]['excerpt_'. app()->getLocale()])) }}</p>

                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="item text-center">
                    <div class="icon-wrap">
                        <span class="step s1-2">2</span>
                        <span class="icon-tools"></span>
                    </div>
                    <h3>{{ strip_tags(trim($how_it_works->data['steps'][2]['title_'. app()->getLocale()])) }}</h3>
                    <p>{{ strip_tags(trim($how_it_works->data['steps'][2]['excerpt_'. app()->getLocale()])) }}</p>

                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="item text-center">
                    <div class="icon-wrap">
                        <span class="step s1-3">3</span>
                        <span class="icon-layers"></span>
                    </div>
                    <h3>{{ strip_tags(trim($how_it_works->data['steps'][3]['title_'. app()->getLocale()])) }}</h3>
                    <p>{{ strip_tags(trim($how_it_works->data['steps'][3]['excerpt_'. app()->getLocale()])) }}</p>

                </div>
            </div>
        </div>
    </div>
</section>
