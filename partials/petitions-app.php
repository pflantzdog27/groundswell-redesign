<header class="groundswell-campaigns row">
    <h3 class="col-xs-12 col-md-5">Campaigns </h3>
    <h5 id="cat-selector" class="col-xs-12 col-md-7"><span>Immigration</span> <b class="icon-arrow-down"></b></h5>
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
                            <p>&nbsp;</p>
                        </div>
                        <span><b>{{signatures}}</b> of {{goal}}</span>
                    </figcaption>
                </figure>
                <div class="col-xs-8 col-sm-9">
                    <h4>{{title}}</h4>
                    <footer class="petition-meta-info">
                        <small>Created by: <b>{{creator}}</b></small>
                        <p><small><a href="#" class="sign-init" data-toggle="modal" data-target="#petition-form">Click to sign petition</a> or <a href="{{url}}" target="_blank">Learn more</a></small></p>
                    </footer>
                </div>
            </div>
        {{/.}}
    </script>
</div>
<div id="petition-form" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalForm" aria-hidden="true">
    <div class="modal-dialog">
        <form role="form" accept-charset="UTF-8" action="#" data-remote="true" id="new_signature"
              method="post" novalidate="novalidate">
            <div>
                <input name="utf8" type="hidden" value="✓">
                <input name="authenticity_token" type="hidden" value="9JiHORKnj4gY6zXz5Rz37ofhSy/VnkSfVa9WcVlcbsM=">
                <input class="hidden" id="signature_source" name="signature[source]" type="hidden">
                <input class="hidden" id="signature_bucket" name="signature[bucket]" type="hidden">
                <input class="hidden" id="signature_external_action_id" name="signature[external_action_id]" type="hidden">
                <input class="hidden" id="signature_obfuscated_bsd_cons_id" name="signature[obfuscated_bsd_cons_id]" type="hidden">
                <input id="redirect_url" name="redirect_url" type="hidden">
                <input id="signature_locale" name="signature[locale]" type="hidden" value="en">
                <input class="hidden" id="signature_one_click_suppressed" name="signature[one_click_suppressed]" type="hidden">
                <input class="hidden" id="signature_join_organisation" name="signature[join_organisation]" type="hidden" value="1">
            </div>

            <div class="form-group">
                <label class="sr-only" for="signature_first_name">First Name</label>
                <input id="signature_first_name" name="signature[first_name]" type="text" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <label class="sr-only" for="signature_last_name">Last Name</label>
                <input id="signature_last_name" name="signature[last_name]" type="text" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <label class="sr-only" for="signature_email">Email</label>
                <input id="signature_email" name="signature[email]" type="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label class="sr-only" for="signature_phone_number">Phone</label>
                <input id="signature_phone_number" name="signature[phone_number]" type="text" placeholder="Phone">
            </div>
            <div class="form-group">
                <label class="sr-only" for="signature_postcode">Zip</label>
                <input id="signature_postcode" name="signature[postcode]" type="text" placeholder="Zip">
            </div>
            <div class="checkbox">
                <label>
                    <input name="signature[is_clergy_member]" id="signature_is_clergy_member" type="checkbox"> I'm a faith leader
                </label>
            </div>
            <div class="control-group select optional signature_clergy_type is_clergy_member-conditional_boolean" style="display: none;">
                <select class="form-control" id="signature_clergy_type" name="signature[clergy_type]">
                    <option value=""></option>
                    <option value="Bishop">Bishop</option>
                    <option value="Brother">Brother</option>
                    <option value="Cantor">Cantor</option>
                    <option value="Deacon">Deacon</option>
                    <option value="Father">Father</option>
                    <option value="Imam">Imam</option>
                    <option value="Minister">Minister</option>
                    <option value="Mother">Mother</option>
                    <option value="Pastor">Pastor</option>
                    <option value="Priest">Priest</option>
                    <option value="Rabbi">Rabbi</option>
                    <option value="Reverend">Reverend</option>
                    <option value="Sister">Sister</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <input class="btn btn-primary" data-disable-with="Signing..." id="new_signature_button" name="commit" type="submit" value="Sign">
        </form>
    </div>
</div>