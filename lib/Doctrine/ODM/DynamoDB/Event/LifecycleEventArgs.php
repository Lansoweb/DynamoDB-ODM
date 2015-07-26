<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\ODM\DynamoDB\Event;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs as BaseLifecycleEventArgs;

/**
 * Lifecycle Events are triggered by the UnitOfWork during lifecycle transitions
 * of documents.
 *
 * @since 1.0
 */
class LifecycleEventArgs extends BaseLifecycleEventArgs
{
    /**
     * Retrieves the associated document.
     *
     * @return object
     */
    public function getDocument()
    {
        return $this->getObject();
    }

    /**
     * Retrieves the associated DocumentManager.
     *
     * @return \Doctrine\ODM\DynamoDB\DocumentManager
     */
    public function getDocumentManager()
    {
        return $this->getObjectManager();
    }
}
