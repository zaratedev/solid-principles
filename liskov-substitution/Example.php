<?php

interface LessonRepositoryInterface {
    /**
     * @return array
     */
    public function getAll();
}

class FileLessonRepository implements LessonRepositoryInterface {

    public function getAll()
    {
        return [];
    }
}

class DbLessonRepository implements LessonRepositoryInterface {

    public function getAll()
    {
        return Lesson::all(); // Violates the LSP, because return a collection
    }
}