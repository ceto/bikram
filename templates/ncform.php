<form id="ncform" class="ncform bikramform" method="post" action="<?= get_template_directory_uri(); ?>/lib/nclead.php" data-abide novalidate>
    <div class="tinycopy">
        <h3><?= __('Próbabérlet igénylése', 'bikram'); ?></h3>
        <p><?= __('A kedvezményes próbabérlethez regisztráció szükséges. Add meg nevedet és az e-mail címedet.', 'bikram'); ?></p>
    </div>
    <fieldset>
        <ul class="inputgrid twocolumns">
            <li>
                <label class="full">
                    <input type="text" value="" placeholder="<?= __('Név', 'bikram'); ?>*" required id="r_name" name="r_name">
                    <span class="fauxplaceholder"><?= __('Név', 'bikram'); ?>*</span>
                </label>
            </li>
            <li class="full">
                <label>
                    <input type="email" placeholder="<?= __('E-mail cím', 'bikram'); ?>*" pattern="email" required name="r_email">
                    <span class="fauxplaceholder"><?php _e('E-mail cím', 'bikram'); ?>*</span>
                </label>
            </li>
        </ul>
    </fieldset>
    <ul class="inputgrid strict">
        <li>
            <label class="checkboxlabel small" for="jelentkezesform-acceptgdpr">
                <input id="jelentkezesform-acceptgdpr" type="checkbox" name="r_acceptgdpr" required>
                <?php printf(__('Elfogadom az <a href="%s" target="_blank">adatkezelési tájékoztatóban</a> foglaltakat.', 'bikram'), get_privacy_policy_url()); ?>
            </label>
        </li>
        <li>
            <label class="checkboxlabel small" for="jelentkezesform-acceptmarketing">
                <input id="jelentkezesform-acceptmarketing" type="checkbox" name="r_acceptmarketing">
                <?= __('Hozzájárulok a kereskedelmi és marketing célú megkeresésekhez.', 'bikram'); ?>
            </label>
        </li>
    </ul>
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="r_human" tabindex="-1" value=""></div>
    <?php wp_nonce_field( 'subscribeform', 'subscribeform-nonce' ); ?>
    <input type="hidden" name="r_pageid" value="<?= get_the_id(); ?>">
    <div class="formactions">
        <button id="ncformsubmit" class="button tertiary" type="submit" data-progresstext="<?= __('Kérem várjon', 'bikram'); ?>" data-sendtext="<?= __('Kérem a kedvezményt', 'bikram'); ?>">
            <?= __('Kérem a kedvezményt', 'bikram'); ?>
        </button>
    </div>
    <div id="ncformresult" class="formresults ncformresult"></div>
</form>
