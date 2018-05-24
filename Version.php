<?php

namespace tonisormisson\versiontag;


class Version
{
    /** @var integer $commitsCount $latest commit */
    public $commitsCount;

    /** @var string[] $commit $latest commit */
    public $commit;

    /** @var string $tag current tag */
    public $branch;

    /** @var string $tag current tag */
    public $tag;

    /**
     * @method __construct
     */
    public function __construct()
    {
        $this->load();
    }


    private function load()
    {
        exec('git branch', $branch);
        exec('git describe --tags', $tag);
        $this->tag = isset($tag[0]) ? $tag[0] : $branch ;
        $this->branch = $branch ;
        exec('git rev-list HEAD | wc -l', $gitCommits);
        $this->commitsCount = intval($gitCommits);
        exec('git log -1', $gitHashLong);
        $this->commit = $gitHashLong;
    }



}