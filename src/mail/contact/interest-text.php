Name: <?=$model->name;?>
Contact: <?=$model->contact;?>
E-mail: <?=$model->email;?>
Interest: <?=is_array($model->interest) ? json_encode($model->interest) : $model->interest;?>
Location: <?=$model->location;?>
Message:
<?=$model->message;?>