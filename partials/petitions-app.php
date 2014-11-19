<header class="groundswell-campaigns row">
    <h3 class="col-xs-12 col-md-7">Campaigns </h3>
    <h5 id="cat-selector" class="col-xs-12 col-md-5"><span>Immigration</span> <b class="icon-arrow-down"></b></h5>
    <ul id="cat-list" class="list-unstyled clearfix">
        <li data-value="economic-justice">Economic Justice</li>
        <li data-value="education-4">Education</li>
        <li data-value="environmental-concerns">Environmental Concerns</li>
        <li data-value="foreign-polcy">Foreign Policy</li>
        <li data-value="gun-violence">Gun Violence</li>
        <li data-value="human-trafficking">Human Trafficking</li>
        <li data-value="immigration">Immigration</li>
        <li data-value="lgbtq">LGBT Equality</li>
        <li data-value="poverty">Poverty</li>
        <li data-value="racial-religious-dignity">Racial &amp; Religious Dignity</li>
        <li data-value="reproductive-rights">Reproductive Rights</li>
        <li data-value="sanctuary">Sanctuary</li>
        <li data-value="women-and-girls">Women &amp; Girls</li>
    </ul>
</header>
<div id="petitions" class="scroll-area">
    <script id="petitionsLayout" type="text/html">
        {{#.}}
        <div class="item row" id="petitionID-{{index}}">
            <figure class="col-xs-4 col-sm-3">
                <img class="img-responsive" src="{{image}}" alt="{{title}}">
                <figcaption class="progress progress-striped active">
                    <div class="progress-bar status-bar"  role="progressbar" aria-valuenow="{{ percent }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ percent }}%">
                        <p><strong>{{signatures}}</strong> of {{goal}}</p>
                    </div>
                </figcaption>
            </figure>
            <div class="col-xs-8 col-sm-9">
                <h4>{{title}}</h4>
                <footer class="petition-meta-info">
                    <small>Created by: <b>{{creator}}</b> {{created_date}}</small>
                    <p><small><a href="{{url}}" target="_blank">Click to sign petition</a> or <a href="{{url}}" target="_blank">Learn more</a></small></p>
                </footer>
            </div>
        </div>
        {{/.}}
    </script>
</div>