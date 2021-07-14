<?php
function pr($data)
{
    echo "<pre>";
    print_r($data);
    exit;
}

function editbox($colname, $label, $fieldname, $placeholder, $value, $script = "")
{
    $isrequired = strpos($script, "required");
    if (is_numeric($isrequired)) {
        $label .= " <b class='text-danger'>*</b>";
    }
    echo '<div class="col-md-' . $colname . '">
              <fieldset class="form-group">
              <label class="form-label semibold">' . $label . '</label>
              <input type="text" ' . $script . ' name="' . $fieldname . '" value="' . $value . '" id="' . $fieldname . '" placeholder ="' . $placeholder . '" class="form-control">
              </fieldset>
            </div>';
}

function StringRepair($temptext)
{
    $temptext = trim($temptext);
    $temptext = str_replace("'", "&#39;", $temptext);
    $temptext = str_replace("\"", "&#34;", $temptext);
    $temptext = ucwords($temptext);
    return $temptext;
}


function alert($message)
{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>  ' . $message . '	</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}

function is_delete($tabul,$id)
{
  $result = DB::table($tabul)->where('id', $id)->update(['isdelete' => "1"]);
  return $result;
}
