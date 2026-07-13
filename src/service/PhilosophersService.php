<?php

class PhilosophersService
{
    private ?array $indexed = null;

    public function getPhilosopher(string $name): ?array
    {
        if ($this->indexed === null) {
            $this->indexed = [];

            foreach (getPhilosophers() as $philosopher) {
                $this->indexed[$this->normalizeName($philosopher['name'])] = $philosopher;
            }
        }

        return $this->indexed[$this->normalizeName($name)] ?? null;
    }

    private function normalizeName(string $name): string
    {
        // Remove acentos e converte caracteres especiais para ASCII (ex.: "Sócrates" → "Socrates")
        $name = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $name);

        $name = strtolower($name);

        // Remove qualquer caractere que não seja letra ou número
        return preg_replace('/[^a-z0-9]+/', '', $name);
    }
}