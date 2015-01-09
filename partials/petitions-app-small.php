<header class="groundswell-campaigns row">
    <h3 class="col-xs-12 col-md-5">Campaigns</h3>
    <h5 id="cat-selector" class="col-xs-12 col-md-7"><span>Featured</span> <b class="icon-arrow-down"></b></h5>
    <ul id="cat-list" class="list-unstyled clearfix">
        <li data-value="categories/economic-justice">Economic Justice</li>
        <li data-value="categories/education-4">Education</li>
        <li data-value="categories/environmental-concerns">Environmental Concerns</li>
        <li data-value="categories/foreign-polcy">Foreign Policy</li>
        <li data-value="categories/gun-violence">Gun Violence</li>
        <li data-value="categories/human-trafficking">Human Trafficking</li>
        <li data-value="categories/immigration">Immigration</li>
        <li data-value="categories/lgbtq">LGBT Equality</li>
        <li data-value="categories/poverty">Poverty</li>
        <li data-value="categories/racial-religious-dignity">Racial &amp; Religious Dignity</li>
        <li data-value="categories/reproductive-rights">Reproductive Rights</li>
        <li data-value="categories/sanctuary">Sanctuary</li>
        <li data-value="categories/women-and-girls">Women &amp; Girls</li>
    </ul>
</header>
<div id="petitions" class="petition-widget scroll-area">
    <script id="petitionsLayout" type="text/html">
        {{#.}}
            <div class="item row" id="petitionID-{{index}}">
                <figure class="col-xs-4 col-sm-3">
                    <img class="img-responsive" src="{{image}}" alt="{{title}}">
                    <figcaption class="progress">
                        <div class="progress-bar status-bar"  role="progressbar" aria-valuenow="{{ percent }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ percent }}%">
                            <p>&nbsp;</p>
                        </div>
                        <span><b>{{signatures}}</b> of {{goal}}</span>
                    </figcaption>
                </figure>
                <div class="col-xs-8 col-sm-9">
                    <h4><a href="{{url}}" target="_blank">{{title}}</a></h4>
                    <footer class="petition-meta-info">
                        <small>Created by: <b>{{creator}}</b></small>
                        <p><small><a href="{{url}}" target="_blank">Click to sign petition</a> or <a href="{{url}}" target="_blank">Learn more</a></small></p>
                    </footer>
                </div>
            </div>
        {{/.}}
    </script>
</div>
