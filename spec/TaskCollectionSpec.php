<?php

namespace spec\AlfaCollege;

use AlfaCollege\Task;
use AlfaCollege\TaskCollection;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TaskCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TaskCollection::class);
    }

    function it_adds_a_task_to_the_collection(Task $task)
    {
        $this->add($task);
        $this->tasks()[0]->shouldBe($task);
    }
}
