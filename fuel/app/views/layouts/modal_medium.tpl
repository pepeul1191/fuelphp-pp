 <!-- Inicio CSS Modal-->
{if isset($csss_modal)}{Helper::load_css($csss_modal)}{/if}
<!-- Fin CSS Modal -->
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{$titulo_modal}</h4>
      </div>
        {include file=$partial_modal}
    </div>
</div>
<!-- Inicio JS Modal-->
{if isset($jss_modal)}{Helper::load_js($jss_modal)}{/if}
<!-- Fin JS Modal -->