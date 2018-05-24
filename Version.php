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
        $this->branch = isset($branch[0]) ? $branch[0] : '';
        $this->tag = isset($tag[0]) ? $tag[0] : $this->branch ;
        exec('git rev-list HEAD | wc -l', $gitCommits);
        $this->commitsCount = intval($gitCommits);
        exec('git log -1', $gitHashLong);
        $this->commit = $gitHashLong;
    }




}