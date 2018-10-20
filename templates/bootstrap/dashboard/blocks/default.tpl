{if !$DISABLED_DASHBOARD and !$DISABLED_DASHBOARD_API}
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title"><i class="fa fa-desktop fa-fw"></i> Last Found Blocks/最後に発見したブロック</h4>
      </div>
      <div class="panel-body no-padding table-responsive">
        <table class="table table-bordered table-hover table-striped"> 
         <thead>
          <tr>
            <th class="text-right">Height/高さ</th>
            <th class="text-center">Finder/発見者</th>
            <th class="text-right">Time/日時</th>
            <th class="text-right">Difficulty/難易度</th>
            <th class="text-right">Amount/数量(IDOL)</th>
            <th class="text-right">Expected Shares/予想されるシェア</th>
            <th class="text-right">Actual Shares/実際のシェア</th>
            <th class="text-right">Percentage/%</th>
          </tr>
          </thead>
          <tbody id="b-blocks">
{section block $BLOCKSFOUND}
            <tr>
              <td class="text-right">{$BLOCKSFOUND[block].height}</td>
              <td>{if $BLOCKSFOUND[block].is_anonymous|default:"0" == 1 && $GLOBAL.userdata.is_admin|default:"0" == 0}anonymous{else}{$BLOCKSFOUND[block].finder|default:"unknown"|escape}{/if}</td>
              <td class="text-right">{$BLOCKSFOUND[block].time|date_format:$GLOBAL.config.date}</td>
              <td class="text-right">{$BLOCKSFOUND[block].difficulty|number_format:"4"}</td>
              <td class="text-right">{$BLOCKSFOUND[block].amount|number_format:"2"}</td>
              <td class="text-right">{$BLOCKSFOUND[block].estshares|number_format:$GLOBAL.config.sharediffprecision}</td>
              <td class="text-right">{$BLOCKSFOUND[block].shares|number_format:$GLOBAL.config.sharediffprecision}</td>
              <td class="text-right">
                {math assign="percentage" equation="shares / estshares * 100" shares=$BLOCKSFOUND[block].shares|default:"0" estshares=$BLOCKSFOUND[block].estshares}
                <font color="{if ($percentage <= 100)}green{else}red{/if}">{$percentage|number_format:"2"}</font>
              </td>
            </tr>
{/section}
          </tbody>
        </table>
      </div>
      {if $GLOBAL.website.blockfindersound.enabled|default:"1"}
      <div id="togglesound" class="togglesound">
        <div class="panel-footer text-right">
          <button id="muteButton" type="button" class="btn-xs btn-success toggleSoundButton"><i class="fa fa-volume-up"></i></button>
        </div>
      </div>
      {/if}
    </div>
  </div>
{/if}
