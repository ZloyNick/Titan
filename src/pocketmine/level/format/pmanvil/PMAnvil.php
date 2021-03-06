<?php

namespace pocketmine\level\format\pmanvil;

use pocketmine\level\format\anvil\Anvil;

class PMAnvil extends Anvil
{

    const REGION_FILE_EXTENSION = "mcapm";
    protected static $chunkSectionClass = ChunkSection::class;
    protected $chunkClass = Chunk::class;
    protected $regionLoaderClass = RegionLoader::class;

    public static function getProviderName()
    {
        return "pmanvil";
    }

    public function requestChunkTask($x, $z)
    {
        $data = parent::requestChunkTask($x, $z);
        $data['isSorted'] = true;
        return $data;
    }

}
