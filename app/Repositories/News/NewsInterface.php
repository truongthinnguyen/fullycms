<?php

namespace Fully\Repositories\News;

use Fully\Repositories\RepositoryInterface;

/**
 * Interface NewsInterface.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
interface NewsInterface extends RepositoryInterface
{
    /**
     * @param $slug
     *
     * @return mixed
     */
    public function getBySlug($slug);

    /**
     * @param $limit
     *
     * @return mixed
     */
    public function getLastNews($limit);

    /**
     * @param $limit
     *
     * @return mixed
     */
    public function getHotNews($limit);
}
