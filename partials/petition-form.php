<div id="petition-form">
    <form role="form" accept-charset="UTF-8" action="http://action.groundswell-mvmt.org/petitions/action-to-protect-central-american-and-mexican-children-and-families/signatures" class="form-stacked new_signature" data-remote="true" id="new_signature"
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


    <script>
        $(function() {
            var conditionalElements = $('.is_clergy_member-conditional_boolean');
            adjustElements($('#signature_is_clergy_member'), conditionalElements);

            $('#signature_is_clergy_member').change(function(){
                var conditionalElements = $('.is_clergy_member-conditional_boolean');
                adjustElements($(this), conditionalElements);
            });
        });

        function adjustElements(elem, elements){
            if( elem.is(':checked') ){
                elements.show();
            } else {
                elements.hide();
            }
        }
    </script>
</div>