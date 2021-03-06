<?php


define('ERRO_OK', 0);
define('ERRO_NOT_FOUND', 1);
define('ERRO_USR_EXISTS', 2);
define('ERRO_MISSING', 3);
define('ERRO_INVALID', 4);
define('ERRO_OPERATION', 5);
define('ERRO_SESSION', 6);
define('ERRO_DENIED', 7);

function responseJSON($cod, $msg)
{

    return response()->json(['cod_erro' => $cod, 'mensagem' => $msg]);
}

function StoreImage($file)
{

    $nome_unico = uniqid(date('HisYmd')) . '.jpg';

    \Storage::cloud()->put($nome_unico, file_get_contents($file));

    return $nome_unico;
}

function StoreFile($file)
{

    $nome_unico = uniqid(date('HisYmd')) . '.' . $file->getClientOriginalExtension();

    \Storage::cloud()->put(limpaString($nome_unico, '.'), file_get_contents($file));

    return $nome_unico;
}

function StoreBase64($file, $maxWidth, $png = null)
{

    $nome_unico = uniqid(date('HisYmd'));
    $photo = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $file)))->widen($maxWidth);
    $photo->interlace();
    $photo->stream();


    if ($png != null) {
        \Storage::cloud()->put($nome_unico . '.png', $photo->__toString());
        $photo->encode('png');
        return $nome_unico . '.png';
    } else {
        $photo->encode('jpg');
        \Storage::cloud()->put($nome_unico . '.jpg', $photo->__toString());
        return $nome_unico . '.jpg';
    }
}




function StoreFileDir($dir, $file)
{

    $nome_unico = uniqid(date('HisYmd')) . '.' . $file->getClientOriginalExtension();

    $destino = $dir . "/" . $nome_unico;

    \Storage::cloud()->put($destino, file_get_contents($file));

    return $nome_unico;
}



function StoreBase64Dir($dir = '', $file, $maxWidth= 1020, $png = null)
{

    $nome_unico = uniqid(date('HisYmd'));
    $destino = $dir . '/' . $nome_unico;

    $photo = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $file)))->widen($maxWidth);
    $photo->interlace();
    $photo->stream();


    if ($png != null) {
        \Storage::cloud()->put($destino . '.png', $photo->__toString());
        $photo->encode('png');
        return $destino . '.png';
    } else {
        $photo->encode('jpg');
        \Storage::cloud()->put($destino . '.jpg', $photo->__toString());
        return $destino . '.jpg';
    }
}


function limpaString($str, $arquivo = null)
{

    $str = preg_replace('/[??????????]/ui', 'a', $str);
    $str = preg_replace('/[????????]/ui', 'e', $str);
    $str = preg_replace('/[????????]/ui', 'i', $str);
    $str = preg_replace('/[??????????]/ui', 'o', $str);
    $str = preg_replace('/[????????]/ui', 'u', $str);
    $str = preg_replace('/[??]/ui', 'c', $str);
    $str = strtolower($str);
    if ($arquivo == null) {
        $str = preg_replace('/_+/', '-', $str);
        $str = preg_replace('/[^a-z0-9]/i', '-', $str);
    } else {
        $str = preg_replace('/ /', '-', $str);
    }


    return $str;
}

function formataEndereco($endereco)
{

    $endereco = preg_replace('/[??????????]/ui', 'a', $endereco);
    $endereco = preg_replace('/[????????]/ui', 'e', $endereco);
    $endereco = preg_replace('/[????????]/ui', 'i', $endereco);
    $endereco = preg_replace('/[??????????]/ui', 'o', $endereco);
    $endereco = preg_replace('/[????????]/ui', 'u', $endereco);
    $endereco = preg_replace('/[??]/ui', 'c', $endereco);
    $endereco = preg_replace('/ +/', '+', $endereco);

    return $endereco;
}
