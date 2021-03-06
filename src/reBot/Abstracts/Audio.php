<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents an audio file to be treated as music by the Telegram clients.
 *
 * @property string    $file_id         identifier for this file, which can be used to download or reuse the file
 * @property string    $file_unique_id   unique identifier for this file, which is supposed to be the same over time and
 *           for different bots. can't be used to download or reuse the file.
 * @property integer   $duration       duration of the audio in seconds as defined by sender
 * @property string    $performer      optional. performer of the audio as defined by sender or by audio tags
 * @property string    $title          optional. title of the audio as defined by sender or by audio tags
 * @property string    $file_name       optional. original filename as defined by sender
 * @property string    $mime_type       optional. mime type of the file as defined by sender
 * @property integer   $file_size       optional. file size
 * @property photosize $thumb          optional. thumbnail of the album cover to which the music file belongs
 * @package realSamy\reBot\Abstracts
 */
abstract class Audio
{
}