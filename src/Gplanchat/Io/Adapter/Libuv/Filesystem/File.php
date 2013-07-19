<?php

namespace Gplanchat\Io\Adapter\Libuv\Filesystem;

use Gplanchat\Io\Filesystem\FileInterface;
use Gplanchat\Io\Filesystem\FilesystemInterface;
use Gplanchat\Io\Loop\LoopAwareTrait;

/**
 * Class File
 * @package Gplanchat\Io\Adapter\Libuv\Filesystem
 */
class File
    implements FileInterface
{
    use LoopAwareTrait;

    /**
     * @var Filesystem
     */
    private $filesystem = null;

    /**
     * @var int
     */
    private $streamId = null;

    /**
     * @param FilesystemInterface $filesystem
     * @param int $streamId
     */
    public function __construct(FilesystemInterface $filesystem, $streamId)
    {
        $this->setFilesystem($filesystem);
        $this->setStreamId($streamId);
        $this->setLoop($filesystem->getLoop());
    }

    /**
     * @param FilesystemInterface $filesystem
     * @return $this
     */
    public function setFilesystem(FilesystemInterface $filesystem)
    {
        $this->filesystem = $filesystem;

        return $this;
    }

    /**
     * @return Filesystem
     */
    public function getFilesystem()
    {
        return $this->filesystem;
    }

    /**
     * @param int $streamId
     * @return $this
     */
    public function setStreamId($streamId)
    {
        $this->streamId = $streamId;

        return $this;
    }

    /**
     * @return int
     */
    public function getStreamId()
    {
        return $this->streamId;
    }

    /**
     * @param int $length
     * @param callable $callback
     * @return $this
     */
    public function truncate($length, callable $callback = null)
    {
//        $self = $this;
//        \uv_fs_truncate($this->getLoop()->getResource(), $path, $length, function($fd) use($callback, $self) {
//            var_dump(func_get_args());
//            $callback($self, $fd);
//        });

        return $this;
    }

    /**
     * @param string $data
     * @param int $position
     * @param callable $callback
     * @return $this
     */
    public function write($data, $position, callable $callback = null)
    {
        return $this;
    }

    /**
     * @param string $data
     * @param int $offset
     * @param int $length
     * @param int $position
     * @param callable $callback
     * @return $this
     */
    public function writeBuffer($data, $offset, $length, $position, callable $callback = null)
    {
        return $this;
    }

/**
 * Class: fs.Stats
 * fs.createReadStream(path, [options])
 *
 * Class: fs.ReadStream
 * Event: 'open'
 * fs.createWriteStream(path, [options])
 *
 * Class: fs.WriteStream
 * Event: 'open'
 * file.bytesWritten
 *
 * Class: fs.FSWatcher
 * watcher.close()
 * Event: 'change'
 * Event: 'error'
 */
}
