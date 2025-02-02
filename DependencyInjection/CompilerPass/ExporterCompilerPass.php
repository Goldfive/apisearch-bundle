<?php

/*
 * This file is part of the Apisearch Bundle.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

declare(strict_types=1);

namespace Apisearch\DependencyInjection\CompilerPass;

/**
 * Class ExporterCompilerPass.
 */
class ExporterCompilerPass extends TagCompilerPass
{
    /**
     * Get collector service name.
     *
     * @return string Collector service name
     */
    public function getCollectorServiceName(): string
    {
        return 'apisearch.exporter_collection';
    }

    /**
     * Get collector method name.
     *
     * @return string Collector method name
     */
    public function getCollectorMethodName(): string
    {
        return 'addExporter';
    }

    /**
     * Get tag name.
     *
     * @return string Tag name
     */
    public function getTagName(): string
    {
        return 'apisearch.exporter';
    }
}
